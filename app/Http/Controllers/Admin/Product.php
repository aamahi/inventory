<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Model\Cart;
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
        $customars = \App\Model\Customar::select('id','customar_name','phone')->orderBy('customar_name','ASC')->get();
        $carts = Cart::with('product')->latest()->get();
//        $categories = \App\Model\Category::select('category_name','id')->get();
        $products = \App\Model\Product::latest()->get();
        return view('admin.product.product_list',compact('carts','products','customars'));
    }
    public function product_details($id){
        $categories = \App\Model\Category::select('category_name','id')->get();
        $product_details = \App\Model\Product::with('category')->find($id);
        $category_id =  \App\Model\Product::with('category')->find($id)->category_id;
        $related_product = \App\Model\Product::select('product_name','photo','id','product_price')->where('category_id',$category_id)->where('id','!=',$id)->take(3)->get();
       return view('admin.product.product_details',compact('categories','product_details','related_product'));
    }
    public function product_delete($id){
       \App\Model\Product::find($id)->delete();
        $notification = array(
            'message' => "Product Deleted Temporary",
            'alert-type' => 'error'
        );
        return redirect()->route('product_list')->with($notification);
    }
    public  function deleted_product(){
        $products = \App\Model\Product::onlyTrashed()->get();
        return view('admin.product.deleted_product',compact('products'));
    }
    public function product_harddelete($id){
      $product_harddelete  = \App\Model\Product::onlyTrashed()->find($id);
      unlink('Uploads/product/'.$product_harddelete->photo);
      $product_harddelete->forceDelete();
        $notification = array(
            'message' => "Product Deleted Sucessfully !",
            'alert-type' => 'error'
        );
        return redirect()->route('deleted_product')->with($notification);

    }
    public  function restore_product($id){
        $restore_product = \App\Model\Product::onlyTrashed()->find($id)->restore();
        $notification = array(
            'message' => "Product Restore Sucessfully !",
            'alert-type' => 'info'
        );
        return redirect()->route('product_list')->with($notification);
    }
    public function product_edit($id){
        echo $id;
    }
    public function search(Request $request){
        $this->validate($request,[
            'product_name'=>'required',
        ]);
        $product_name =  $request->product_name;

        $products =  \App\Model\Product::where('product_name','LIKE',"%{$product_name}%")->get();
        $categories = \App\Model\Category::select('category_name','id')->get();
        return view('admin.product.search_product',compact('categories','products'));
    }
    public function addCart($id){

        if (1 > \App\Model\Product::find($id)->quantity) {
            return response()->json([
                'error' => "Product ot of stock !"
            ]);
        } else {
            $ip_address = request()->ip();
            $data = [];
            $data['product_id'] = $id;
            $data['quantity'] = 1;
            $data['ip'] =$ip_address;
            $data['created_at']=Carbon::now();
            if (Cart::where('product_id', $id)->where('ip', $ip_address)->exists()) {
                Cart::where('product_id', $id)->where('ip', $ip_address)->increment('quantity', 1);
                $notification = array(
                    'message' => "Again Product add to cart!",
                    'alert-type' => 'info'
                );
                return redirect()->route('product_list')->with($notification);
            } else {
                Cart::insert($data);
                $notification = array(
                    'message' => "Product Add to cart !",
                    'alert-type' => 'success'
                );
                return redirect()->route('product_list')->with($notification);
            }
        }
    }
    public  function deleteCart($id){
        Cart::find($id)->delete();
        $notification = array(
            'message' => "Product Delete from cart!",
            'alert-type' => 'error'
        );
        return redirect()->route('product_list')->with($notification);
    }
    public function cancelCart(){
        $ip = \request()->ip();
        Cart::where('ip','$id')->delete();
        $notification = array(
            'message' => "Cancel Order!",
            'alert-type' => 'info'
        );
        return redirect()->route('product_list')->with($notification);
    }
}
