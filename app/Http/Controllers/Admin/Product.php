<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\_parse_request_uri;

class Product extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add_product(){
        $categories = \App\Model\Category::latest()->get();
        return view('admin.product.add_product',compact('categories'));
    }
    public function add_product_pro(ProductRequest $request){
        $photo = $request->file('photo');
        $photo_extension = $photo->getClientOriginalExtension();
        $photo_name = "product".date('Ymd_h_is').rand(1,9);
        $image = $photo_name.".".$photo_extension;
        $data = [];
        $data['category_id']= $request->category_id;
        $data['product_name']= $request->product_name;
        $data['product_price']= $request->product_price;
        $data['product_details']= $request->product_details;
        $data['quantity']= $request->quantity;
        $data['photo']= $image;
        $data['created_at']= Carbon::now();
//        print_r($data);

        if($photo->isValid()){
            $photo->move('Uploads/product',$image);
            $add_product = \App\Model\Product::create($data);
            if ($add_product){
                $notification = array(
                    'message' => "Product Added Successfully",
                    'alert-type' => 'success'
                );
            }
        }

        return redirect()->route('add_product')->with($notification);
    }
    public function product_list(){
        $categories = \App\Model\Category::select('category_name','id')->get();
        $products = \App\Model\Product::latest()->get();
        return view('admin.product.product_list',compact('categories','products'));
    }
}
