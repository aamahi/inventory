<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BkashRequest;
use App\Model\Bkash;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BkashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function bkash(){
        $bkashInfo = Bkash::latest()->get();
        return view('admin.bkash',compact('bkashInfo'));

    }
    public function addBkash(BkashRequest $request){
        $bkash=[];
        $bkash['number']=$request->number;
        $bkash['amount']=$request->amount;
        $bkash['recive']=$request->recive;
        $bkash['send']=$request->send;
        $bkash['created_at']=Carbon::now();
        Bkash::insert($bkash);
        $notification = array(
            'message' => "Inserted Infomation",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function reciveBkash($id){
        $reciveBkash= Bkash::find($id);
        $reciveAmount =  $reciveBkash->amount;
        $reciveBkash->recive = $reciveAmount;
        $reciveBkash->save();
        $notification = array(
            'message' => "Recived by Customar",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    public function sendBkash($id){
        $sendBkash= Bkash::find($id);
        $sendAmount =  $sendBkash->amount;
        $sendBkash->recive = $sendAmount;
        $sendBkash->save();
        $notification = array(
            'message' => "Send to Customar",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

}
