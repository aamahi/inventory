<?php

namespace App\Http\Controllers;

use App\Model\CeoMessage;
use App\Model\Contract;
use App\Model\Setting;
use App\Model\About;
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

    public function ceo(){
        $ceo = CeoMessage::find(1);
        return view('Admin.ceoMessage',compact('ceo'));
    }
    public function ceoUpdate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
        ]);

        if($request->file('photo')){
            $ceo = CeoMessage::find(1);
            $oldPhotoName = $ceo->photo;
            unlink('uploads/logo/'.$oldPhotoName);
            $newPhoto = $request->file('photo');
            $photoName =  "CeoPhoto".".".$newPhoto->getClientOriginalExtension();
            $uploadLocation = base_path('public/uploads/logo/'.$photoName);
            $upload_image = Image::make($newPhoto)->resize(150,150)->save($uploadLocation);

            $ceo->photo = $photoName;
            $ceo->name = $request->name;
            $ceo->message = $request->message;
            $ceo->save();

        }else{
            $ceo = CeoMessage::find(1);
            $ceo->name = $request->name;
            $ceo->message = $request->message;
            $ceo->save();
        }

        return redirect()->back();
    }
    public function contract(){
        $contacts = Contract::latest()->get();
        return view('Admin.contract',compact('contacts'));
    }
    public function contactSeen($id){
        $contract  = Contract::find($id);
        $contract->status = 1;
        $contract->save();
        $notification = array(
            'message' => "Contact Messge Seen !",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function about(){
        $about = About::find(1);
        return view('Admin.about',compact('about'));
    }
    public function aboutUpdate(Request $request)
    {
        $this->validate($request, [
//            'photo' => 'required',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $about = About::find(1);
            $oldPhotoName = $about->photo;
            unlink('uploads/logo/'.$oldPhotoName);
            $newPhoto = $request->file('photo');
            $photoName = "about" . "." . $newPhoto->getClientOriginalExtension();
            $uploadLocation = base_path('public/uploads/logo/' . $photoName);
            $upload_image = Image::make($newPhoto)->resize(670, 322)->save($uploadLocation);

            $about->photo = $photoName;
            $about->message = $request->message;
            $about->save();

        } else {
            $ceo = About::find(1);
            $ceo->message = $request->message;
            $ceo->save();
        }

        return redirect()->back();
    }

    public function deleteContact($id){
        Contract::find($id)->delete();
        $notification = array(
            'message' => "Contact Deleted !",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

    }
}
