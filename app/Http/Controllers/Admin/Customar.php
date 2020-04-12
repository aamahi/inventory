<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Customar_group;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Customar extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function update_customar_group($id){
        $customar_group = Customar_group::find($id);
        return view('admin.customar.update_customar_group',compact('customar_group'));
    }
    public  function update_customar_groupP(Request $request ,$id){
        $this->validate($request , [
            'customar_group_name'=>'required'
        ]);
//        return $request->all();
        $customar_group = Customar_group::find($id);
        $customar_group->customar_group_name = $request->customar_group_name;
        $customar_group->save();
        return redirect()->route('customar_group');
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
            'customar_group_id'=>'required',
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
        $customars = \App\Model\Customar::with('customars')->select('id','customar_name','phone','email','balance','due','photo','customar_group_id','address')->get();
        return view('admin.customar.all_customar',compact('customars'));
//        dd($customars);
    }

    public function show_customar($id){
        $customar = \App\Model\Customar::with('customars')->find($id);
        return view('admin.customar.show_customar',compact('customar'));
    }

    public function delete_customar($id)
    {
        $delete = \App\Model\Customar::find($id);
//        unlink('Uploads/employe/'.$delete->image);
        $u = $delete->delete();
        if ($u) {
            $notification = array(
                'message' => "Customar Deleted Successfully",
                'alert-type' => 'error'
            );
            return redirect()->route('all_customar')->with($notification);
        }
    }

    public function deleted_customar(){
        $deleted_customar = \App\Model\Customar::onlyTrashed()->get();
        return view('admin.customar.deleted_customar',compact('deleted_customar'));
    }
    public function restore($id){
        $restore =  \App\Model\Customar::withTrashed()->find($id)->restore();
        if ($restore) {
            $notification = array(
                'message' => "Customar Back Successfully",
                'alert-type' => 'info'
            );
            return redirect()->route('all_customar')->with($notification);
        }
    }
    public function deleteF($id){
        $deleteF= \App\Model\Customar::onlyTrashed()->find($id);
//        unlink('Uploads/customar/'.$deleteF->photo);
        $deleteF->forceDelete();
        if ($deleteF) {
            $notification = array(
                'message' => "Customar Deleted Successfully Lifetime",
                'alert-type' => 'error'
            );
            return redirect()->route('h_deleted')->with($notification);
        }
    }

    public function update_customar($id){
        $customar=  \App\Model\Customar::find($id);
        $customar_group = Customar_group::all();
        return view('admin.customar.update_customar',compact('customar','customar_group'));
    }
    public function update_customar_pro(Request $request ,$id){
        $old_customar = \App\Model\Customar::find($id);

        $this->validate($request , [
            'customar_group_id'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
        ]);

        if ($request->file('photo')){
            $photo = $request->file('photo');
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = "employe_no_".date('Ymd_h_is').rand(1,9);
            $image = $photo_name.".".$photo_extension;
//            $customar['photo'] = $image;
        }

        $customar_name = $request->name;
        $customar_group_id = $request->customar_group_id;
        $phone = $request->phone;
        $email= $request->email;
        $address= $request->address;

        if($request->file('photo')) {
            if ($photo->isValid()) {
                unlink('Uploads/customar', $old_customar->photo);
                $photo->move('Uploads/customar', $image);

                $old_customar->name = $customar_name;
                $old_customar->customar_group_id = $customar_group_id;
                $old_customar->phone = $phone;
                $old_customar->email = $email;
                $old_customar->address = $address;
                $old_customar->photo = $photo;
                $old_customar->save;

                if ($old_customar) {
                    $notification = array(
                        'message' => "Customar Updated Successfully",
                        'alert-type' => 'success'
                    );
                }
            }
        }else{
//            $old_customar->name = $customar_name;
//            $old_customar->customar_group_id = $customar_group_id;
//            $old_customar->phone = $phone;
//            $old_customar->email = $email;
//            $old_customar->address = $address;
//            $old_customar->save;
//            if ($old_customar) {
//                $notification = array(
//                    'message' => "Customar Added Successfully",
//                    'alert-type' => 'success'
//                );
//            }
        }
        return redirect()->route('all_customar');

    }
}


