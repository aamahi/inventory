<?php

namespace App\Http\Controllers;

use App\Model\Course;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    public function Course(){
        $courses = Course::latest()->get();
        return view('Admin.course',compact('courses'));
    }
    public function addCourse(){
        return view('Admin.addCourse');
    }

    public function addCoursePro(Request $request){
        $this->validate($request,
            [
                'title'=>'required',
                'details'=>'required|min:300',
                'module'=>'required',
                'pre'=>'required',
                'photo'=>'required',
            ]
        );
        $newPhoto = $request->file('photo');
        $photoName = "course".rand(1,90).date('his_ymd')."." . $newPhoto->getClientOriginalExtension();
        $uploadLocation = base_path('public/uploads/course/' . $photoName);
        Image::make($newPhoto)->resize(670, 322)->save($uploadLocation);

        $course = [];
        $course['title'] = $request->title;
        $course['details'] = $request->details;
        $course['module'] = $request->module;
        $course['pre'] = $request->pre;
        $course['photo'] = $photoName;

        Course::insert($course);
        return redirect()->back();

    }

    public function deleteCourse($id){
        $course = Course::find($id);
        unlink('uploads/course/'.$course->photo);
        $course->delete();
        return redirect()->back();
    }

    public function editCourse($id){
        $course = Course::find($id);
        return view('Admin.editCourse',compact('course'));
    }
    public function updateCourse(Request $request ,$id){
        $this->validate($request,[
            'title'=>'required',
            'details'=>'required|min:300',
            'module'=>'required',
            'pre'=>'required',
        ]);
        if($request->photo){
            $course = Course::find($id);
            unlink('uploads/course/'.$course->photo);
            $course->delete();

            $newPhoto = $request->file('photo');
            $photoName = "course".rand(1,90).date('his_ymd')."." . $newPhoto->getClientOriginalExtension();
            $uploadLocation = base_path('public/uploads/course/' . $photoName);
            Image::make($newPhoto)->resize(670, 322)->save($uploadLocation);

            $course->title = $request->title;
            $course->details = $request->details;
            $course->module = $request->module;
            $course->pre = $request->pre;
            $course->photo = $photoName;
            $course->save();
        }else{
            $course = Course::find($id);
            $course->title = $request->title;
            $course->details = $request->details;
            $course->module = $request->module;
            $course->pre = $request->pre;
            $course->save();
        }
        return redirect()->back();

    }
}
