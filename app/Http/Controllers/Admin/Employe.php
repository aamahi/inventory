<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use App\Model\Empolye;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Employe extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_employe(){
        return view('admin.employe.add_employe');
    }
    public function add_employe_process(EmployeRequest $request){
//        $image
//        return $request->all();
        $photo = $request->file('image');
        $photo_extension = $photo->getClientOriginalExtension();
        $photo_name = "employe_no_".date('Ymd_h_is').rand(1,9);
        $image = $photo_name.".".$photo_extension;
        $data = [];
        $data['name']= $request->name;
        $data['position']= $request->position;
        $data['email']= $request->email;
        $data['salary']= $request->salary;
        $data['phone']= $request->phone;
        $data['address']= $request->address;
        $data['image']= $image;
        $data['created_at']= Carbon::now();
//        print_r($data);

        if($photo->isValid()){
            $photo->move('Uploads/employe',$image);
            $insert_employe = Empolye::create($data);
            if ($insert_employe){
                $notification = array(
                    'message' => "Employe Added Successfully",
                    'alert-type' => 'success'
                );
            }
        }

        return redirect()->route('all_employe')->with($notification);
    }
    public function all_employe(){
        $employes = Empolye::all();
        return view('admin.employe.all_employe',compact('employes'));
    }

    public function update_employe($id){
        $employe_info = Empolye::find($id);
        return view('admin.employe.update_employe',compact('employe_info'));
    }
    public function update_employe_pro(UpdateEmployeRequest $request,$id){
        return $request->all();
    }

    public function delete_employe($id)
    {
        $delete = Empolye::findOrFail($id);
//        unlink('Uploads/employe/'.$delete->image);
        $u = $delete->delete();
        if ($u) {
            $notification = array(
                'message' => "Employe Deleted Successfully",
                'alert-type' => 'error'
            );
            return redirect()->route('all_employe')->with($notification);
        }
    }

    public function deleted_employe(){
        $deleted_employes = Empolye::onlyTrashed()->get();
        return view('admin.employe.deleted_employe',compact('deleted_employes'));
    }
    public function restore($id){
       $restore =  Empolye::withTrashed()->find($id)->restore();
        if ($restore) {
            $notification = array(
                'message' => "Employe Back Successfully",
                'alert-type' => 'primary'
            );
            return redirect()->route('all_employe')->with($notification);
        }
    }
    public function deleteF($id){
        $deleteF= Empolye::onlyTrashed()->find($id);
        unlink('Uploads/employe/'.$deleteF->image);
        $deleteF->forceDelete();
        if ($deleteF) {
            $notification = array(
                'message' => "Employe Deleted Successfully Lifetime",
                'alert-type' => 'error'
            );
            return redirect()->route('deleted_employe')->with($notification);
        }
    }
}



