<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customar extends Controller
{
    //Add Customar
    public function add_customar(){
        return view('admin.customar.add_customar');
    }
}
