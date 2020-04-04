<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employe extends Controller
{
    public function add_employe(){
        return view('admin.add_employe');
    }
}
