<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeRequest;
use Illuminate\Http\Request;

class Employe extends Controller
{
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
        if($photo->isValid()){
            $photo->storeAs('employe',$image);
        }
        return redirect()->back();
    }
}
