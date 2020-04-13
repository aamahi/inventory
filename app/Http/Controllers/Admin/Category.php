<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function category(){
        $categories = \App\Model\Category::all();
        return view('admin.category.category',compact('categories'));
    }
    public function category_add(Request $request){
        $this->validate($request,[
            'category_name'=>"required|unique:categories,category_name",
        ]);
        $data =[];
        $data['category_name'] = $request->category_name;
        $data['created_at'] = Carbon::now();

        $category_add = \App\Model\Category::insert($data);
        $notification = array(
            'message' => "Category Added Successfully",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function edit_category($id){
        $category_info = \App\Model\Category::find($id);
        return view('admin.category.update_category',compact('category_info'));
    }
    public function update_category(Request $request , $id){
        $this->validate($request,[
            'category_name'=>"required",
        ]);
       $update_category = \App\Model\Category::find($id)->update([
           'category_name' => $request->category_name,
       ]);
        $notification = array(
            'message' => "Category Updated",
            'alert-type' => 'primary'
        );
        return redirect()->route('category')->with($notification);
    }
}

