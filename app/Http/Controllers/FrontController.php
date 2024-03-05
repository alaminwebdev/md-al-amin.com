<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.dashboard');
    }
    public function about(){
        return view('frontend.about');
    }
    public function works(){
        return view('frontend.dashboard');
    }
    public function contact(){
        return view('frontend.dashboard');
    }
}
