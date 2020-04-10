<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Customar_group;
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
        return view('admin.customar.add_customar');
    }
}
