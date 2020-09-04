<?php

namespace App\Http\Controllers;

use App\Model\Clint;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class clintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function clint(){
        $clints = Clint::latest()->get();
        return view('Admin.clint',compact('clints'));
    }
    public function addClint(Request $request){
        $this->validate($request,[
            'banner'=>'required'
        ]);
        $banner = $request->file('banner');
        $bannerExtension = $banner->getClientOriginalExtension();
        $bannerName = "clint".date('ymd_his').rand(1,99).".".$bannerExtension;
        $uploadLocation = base_path('public/uploads/clint/'.$bannerName);
        $upload_image = Image::make($banner)->resize(280,106)->save($uploadLocation);

        $clint = [];
        $clint['title']=$request->title;
        $clint['banner']=$bannerName;
        Clint::insert($clint);
        return redirect()->back();
    }
    public function deleteClint($id){
        $clint = Clint::find($id);
        unlink('uploads/clint/'.$clint->banner);
        $clint->delete();
        return redirect()->back();
    }
}
