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
        $bkashInfo = Bkash::with('user')->latest()->get();
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

        if(''!=$recive){
            if($amount==$recive){
                $bkash['recive'] =2;
                Bkash::insert($bkash);
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
                $bkash['send'] =2;
                Bkash::insert($bkash);
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
            $bkash['recive'] = 1;
            Bkash::insert($bkash);
            $notification = array(
                'message' => "Taka Dosen't Recive",
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }elseif (11==strlen($number)){
            $bkash['send'] =1;
            Bkash::insert($bkash);
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
    public function reciveBkash($id){
        $reciveBkash= Bkash::find($id);
        $reciveBkash->recive = 2;
        $reciveBkash->user_id = Auth::user()->id;
        $reciveBkash->created_at = Carbon::now();
        $reciveBkash->save();
        $notification = array(
            'message' => "Recived by Customar",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    public function sendBkash($id){
        $sendBkash= Bkash::find($id);
        $sendBkash->send = 2;
        $sendBkash->user_id = Auth::user()->id;
        $sendBkash->created_at = Carbon::now();
        $sendBkash->save();
        $notification = array(
            'message' => "Send to Customar",
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    public function deleteBkash($id){
        $sendBkash= Bkash::find($id);
        $sendBkash->delete();
        $notification = array(
            'message' => "Delete Bkash Number",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

}
