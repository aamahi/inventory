<?php

namespace App\Http\Controllers;

use App\Model\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{
    public function  index(){
        return view('Admin.adminHome');
    }
    public function setting(){
        $setting = Setting::find(1);
        return view('Admin.setting',compact('setting'));
    }
    public function addSetting(Request $request){
        $this->validate($request,[
            'primaryEmail'=>'required',
            'primaryPhone'=>'required',
            'address'=>'required',
        ]);

        if($request->file('logo')){
            $setting = Setting::find(1);
            $oldPhotoName = $setting->logo;
            unlink('uploads/logo/'.$oldPhotoName);
            $newLogo = $request->file('logo');
            $logo =  "logo".".".$newLogo->getClientOriginalExtension();
            $uploadLocation = base_path('public/uploads/logo/'.$logo);
            $upload_image = Image::make($newLogo)->resize(231,55)->save($uploadLocation);

            $setting->logo = $logo;
            $setting->primaryEmail = $request->primaryEmail;
            $setting->otherEmail = $request->otherEmail;
            $setting->primaryPhone = $request->primaryPhone;
            $setting->otherPhone = $request->otherPhone;
            $setting->otherPhone = $request->otherPhone;
            $setting->address = $request->address;
            $setting->save();

        }else{
            $setting = Setting::find(1);
            $setting->primaryEmail = $request->primaryEmail;
            $setting->otherEmail = $request->otherEmail;
            $setting->primaryPhone = $request->primaryPhone;
            $setting->otherPhone = $request->otherPhone;
            $setting->otherPhone = $request->otherPhone;
            $setting->address = $request->address;
            $setting->save();
        }

        return redirect()->back();
    }
}
