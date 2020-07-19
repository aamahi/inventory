<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BkashRequest;
use App\Model\Bkash;
use App\Model\ReciveBkash;
use App\Model\SendBkash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BkashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function bkash(){
        $bkashInfo = Bkash::with('send','recive')->latest()->get();
        return view('admin.bkash',compact('bkashInfo'));

    }
    public function addBkash(BkashRequest $request){
        $recive = $request->recive;
        $send = $request->send;
        $amount = $request->amount;
        $number = $request->number;

        $bkash=[];
        $bkash['number']=$number;
        $bkash['amount']=$amount;
        $bkash['user_id']=Auth::user()->id;
        $bkash['created_at']=Carbon::now();
        $bkash_id = Bkash::insertGetId($bkash);

        if(''!=$recive){
            if($amount==$recive){
                $recive_bkash =[];
                $recive_bkash['bkash_id']= $bkash_id;
                $recive_bkash['status']= 1;
                ReciveBkash::insert($recive_bkash);
                $notification = array(
                    'message' => "Taka Recive by Customar",
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'message' => "Amount Dosen't match",
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            }

        }elseif(''!=$send){
            if($amount==$send){
                $send_bkash =[];
                $send_bkash['bkash_id']= $bkash_id;
                $send_bkash['status']= 1;
                SendBkash::insert($send_bkash);
                $notification = array(
                    'message' => "Taka Send to Customar",
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'message' => "Amount Dosen't match",
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            }
        }elseif (4==strlen($number)){
            $recive_bkash =[];
            $recive_bkash['bkash_id']= $bkash_id;
            ReciveBkash::insert($recive_bkash);
            $notification = array(
                'message' => "Taka Dosen't Recive",
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }elseif (11==strlen($number)){
            $send_bkash =[];
            $send_bkash['bkash_id']= $bkash_id;
//            $send_bkash['status']= 1;
            SendBkash::insert($send_bkash);
            $notification = array(
                'message' => "Taka Not Send",
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }else{
             $notification = array(
            'message' => "Please get a correct Bkash Number",
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
        }
    }
//    public function reciveBkash($id){
//        $reciveBkash= Bkash::find($id);
//        $reciveAmount =  $reciveBkash->amount;
//        $reciveBkash->recive = $reciveAmount;
//        $reciveBkash->save();
//        $notification = array(
//            'message' => "Recived by Customar",
//            'alert-type' => 'info'
//        );
//        return redirect()->back()->with($notification);
//    }
//    public function sendBkash($id){
//        $sendBkash= Bkash::find($id);
//        $sendAmount =  $sendBkash->amount;
//        $sendBkash->recive = $sendAmount;
//        $sendBkash->save();
//        $notification = array(
//            'message' => "Send to Customar",
//            'alert-type' => 'info'
//        );
//        return redirect()->back()->with($notification);
//    }

}
