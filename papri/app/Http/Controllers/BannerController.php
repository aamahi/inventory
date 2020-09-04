<?php

namespace App\Http\Controllers;

use App\Model\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class BannerController extends Controller
{
    public function banner(){
        $sliders = Slider::latest()->get();
        return view('Admin.banner',compact('sliders'));
    }
    public function addBanner(Request $request){
        $this->validate($request,[
            'banner'=>'required'
        ]);
        $banner = $request->file('banner');
        $bannerExtension = $banner->getClientOriginalExtension();
        $bannerName = "banner".date('ymd_his').rand(1,99).".".$bannerExtension;
        $uploadLocation = base_path('public/uploads/slider/'.$bannerName);
        $upload_image = Image::make($banner)->resize(1919,640)->save($uploadLocation);

        $banner = [];
        $banner['title']=$request->title;
        $banner['description']=$request->description;
        $banner['banner']=$bannerName;
        Slider::insert($banner);
        return redirect()->back();
    }
    public function deleteBanner($id){
        $slider = Slider::find($id);
        unlink('uploads/slider/'.$slider->banner);
        $slider->delete();
        return redirect()->back();
    }
}
