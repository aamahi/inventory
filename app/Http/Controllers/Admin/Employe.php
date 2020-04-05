<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeRequest;
use App\Model\Empolye;
use Illuminate\Http\Request;

class Employe extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_employe(){
        return view('admin.add_employe');
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

        return redirect()->back()->with($notification);
    }
    public function all_employe(){
        $employes = Empolye::all();
        return view('admin.all_employe',compact('employes'));
    }
}
