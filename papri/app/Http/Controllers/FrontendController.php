<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\CeoMessage;
use App\Model\Clint;
use App\Model\Contract;
use App\Model\Course;
use App\Model\Service;
use App\Model\Setting;
use App\Model\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $courses = Course::select('id','title','details','module','pre','photo')->paginate(4);
        $services = Service::select('id','title','details','photo')->paginate(4);
        $clints = Clint::latest()->get();
        $sliders = Slider::latest()->get();
        $ceo = CeoMessage::find(1);
        return view('Frontend.home',compact('sliders','courses','clints','ceo','services'));
    }
    public function contact(){
        $info = Setting::find(1);
        return view('Frontend.contact',compact('info'));
    }
    public function senContact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $contract = [];
        $contract['name'] = $request->name;
        $contract['email'] = $request->email;
        $contract['message'] = $request->message;
        $contract['created_at'] = Carbon::now();
        Contract::insert($contract);
        return redirect()->back();
    }
    public function about(){
        $about = About::find(1);
        return view('Frontend.about',compact('about'));
    }
    public function serviceDetails($id){
        $service = Service::find($id);
        return view('Frontend.serviceDetails',compact('service'));
    }
    public function courseDetails($id){
        $course = Course::find($id);
        return view('Frontend.courseDetails',compact('course'));
    }
}
