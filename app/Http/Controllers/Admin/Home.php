<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function index(){
        return view('admin.index');
    }
    public function stock(){
        $products  = \App\Model\Product::with('category')->latest()->get();
        return view('admin.product.stock',compact('products'));
    }
}

