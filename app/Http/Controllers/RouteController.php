<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        return view('home');
    }
    public function catalog(){
        return view('catalog');
    }
    public function admin(){
        return view('admin.admin');
    }
}
