<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuppliarRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Suppliar extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_suppliar(){
        return view('admin.suppliar.add_suppliar');
    }
    public function add_suppliar_process(SuppliarRequest $request){
        $photo = $request->file('photo');
        $photo_extension = $photo->getClientOriginalExtension();
        $photo_name = "suppliar_no_".date('Ymd_h_is').rand(1,9);
        $image = $photo_name.".".$photo_extension;
        $data = [];
        $data['suppliar_name']= $request->suppliar_name;
        $data['company_name']= $request->company_name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['address']= $request->address;
        $data['photo']= $image;
        $data['created_at']= Carbon::now();
//        print_r($data);

        if($photo->isValid()){
            $photo->move('Uploads/suppliar',$image);
            $insert_suppliar = \App\Model\Suppliar::create($data);
            if ($insert_suppliar){
                $notification = array(
                    'message' => "Suppliar Added Successfully",
                    'alert-type' => 'success'
                );
            }
        }

        return redirect()->route('add_suppliar')->with($notification);
    }

    public function all_suppliar(){
        $suppliars = \App\Model\Suppliar::all();
        return view('admin.suppliar.all_suppliar',compact('suppliars'));
    }
}

