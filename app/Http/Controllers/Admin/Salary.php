<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Empolye;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Salary extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $employes = Empolye::select('name','id')->get();
        $paysalarys = \App\Model\salary::with('employes')->select('employe_id','month','year','created_at')->paginate(5);
        return view('admin.employe.salary',compact('employes','paysalarys'));
    }
    public function paysalary(Request $request){
        $validation_rule =[
            'employe_id'=>'required',
            'month'=>'required',
        ];
        $this->validate($request,$validation_rule);
        $paySalary = [];
        $paySalary['employe_id'] =$request->employe_id;
        $paySalary['month'] =$request->month;
        $paySalary['year'] = Carbon::now()->format('Y');
        $paySalary['created_at'] = Carbon::now();
        if (\App\Model\salary::where('employe_id',$request->employe_id)->where('month',$request->month)->where('year',Carbon::now()->format('Y'))->exists()){
            $notification = array(
                'message' => "Salary Already Pay",
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }else{
            \App\Model\salary::insert($paySalary);
            $notification = array(
                'message' => "Salary Pay Sucessfully",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }

    }
}

