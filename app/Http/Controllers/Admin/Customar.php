<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Customar_group;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Customar extends Controller
{
    //   Customar Group

    public function customar_group(){
        $customar_group = Customar_group::select('id','customar_group_name')->orderBy('id','ASC')->get();
        return view('admin.customar.customar_group',compact('customar_group'));
    }
    public function customar_group_add(Request $request){
        $this->validate($request ,[
            'customar_group_name'=>'required |unique:customar_groups,customar_group_name',
//            'customar_group_name'=>'required',
        ]);
        Customar_group::insert([
            'customar_group_name' => $request->customar_group_name,
        ]);
        $notification = array(
            'message' => "Customar group added !",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete_customar_group($id){
        $delete_customar_group = Customar_group::find($id)->delete();
        $notification = array(
            'message' => "Customar group deleted sucessfully !",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }


    //Add Customar
    public function add_customar(){
        $customar_group = Customar_group::select('id','customar_group_name')->get();
        return view('admin.customar.add_customar',compact('customar_group'));
    }
    public function add_customar_process(Request $request){
        $this->validate($request , [
            'customar_name'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);

        $customar = [];

        if ($request->file('photo')){
            $photo = $request->file('photo');
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = "employe_no_".date('Ymd_h_is').rand(1,9);
            $image = $photo_name.".".$photo_extension;
            $customar['photo'] = $image;
        }

        $customar['customar_name'] = $request->customar_name;
        $customar['customar_group_id'] = $request->customar_group_id;
        $customar['phone'] = $request->phone;
        $customar['email'] = $request->email;
        $customar['address'] = $request->address;
        $customar['created_at'] = Carbon::now();

        if($request->file('photo')) {
            if ($photo->isValid()) {
                $photo->move('Uploads/customar', $image);
                $insert_customar = \App\Model\Customar::create($customar);
                if ($insert_customar) {
                    $notification = array(
                        'message' => "Customar Added Successfully",
                        'alert-type' => 'success'
                    );
                }
            }
        }else{
            $insert_customar = \App\Model\Customar::create($customar);
            if ($insert_customar) {
                $notification = array(
                    'message' => "Customar Added Successfully",
                    'alert-type' => 'success'
                );
            }
        }
        return redirect()->route('all_customar')->with($notification);
    }


    public function all_customar(){
        $customars = \App\Model\Customar::all();
        return view('admin.customar.all_customar',compact('customars'));
    }

    public function show_customar($id){
        $customar = \App\Model\Customar::find($id);
        return view('admin.customar.show_customar',compact('customar'));
    }
}


