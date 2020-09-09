<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(){
        return view('Admin.addCourse');
    }
    public function addCoursePro(Request $request){
        return $request->all();
    }
}
