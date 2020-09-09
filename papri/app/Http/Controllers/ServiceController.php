<?php

namespace App\Http\Controllers;

use App\Model\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function addService(){
        return view('Admin.addService');
    }
    public function addServicePro(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'details'=>'required|min:300',
            'photo'=>'required',
        ]);

        $newPhoto = $request->file('photo');
        $photoName = "service".rand(1,90).date('his_ymd')."." . $newPhoto->getClientOriginalExtension();
        $uploadLocation = base_path('public/uploads/service/' . $photoName);
        $upload_image = Image::make($newPhoto)->resize(670, 322)->save($uploadLocation);

        $service = [];
        $service['title'] = $request->title;
        $service['details'] = $request->details;
        $service['photo'] = $photoName;
        Service::insert($service);
        return redirect()->back();
    }

    public function service(){
        $services = Service::latest()->get();
        return view('Admin.service',compact('services'));
    }
    public function deleteService($id){
        $service = Service::find($id);
        unlink('uploads/service/'.$$service->photo);
        $service->delete();
        return redirect()->back();
    }

    public function editService($id){
        $service = Service::find($id);
        return view('Admin.editService',compact('service'));
    }
    public function updateService(Request $request ,$id){
        $this->validate($request,[
            'title'=>'required',
            'details'=>'required|min:300',
        ]);
        if($request->photo){
             $service = Service::find($id);
            unlink('uploads/service/'.$service->photo);
            $service->delete();

            $newPhoto = $request->file('photo');
            $photoName = "service".rand(1,90).date('his_ymd')."." . $newPhoto->getClientOriginalExtension();
            $uploadLocation = base_path('public/uploads/service/' . $photoName);
            $upload_image = Image::make($newPhoto)->resize(670, 322)->save($uploadLocation);

            $service->title = $request->title;
            $service->details = $request->details;
            $service->photo = $photoName;
            $service->save();
        }else{
             $service = Service::find($id);
             $service->title = $request->title;
             $service->details = $request->details;
             $service->save();
        }
        return redirect()->back();

    }
}
