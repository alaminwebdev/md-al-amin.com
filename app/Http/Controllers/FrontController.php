<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;

class FrontController extends Controller
{
    public function index(){
        $data['educations'] = AboutMe::EDUCATION;
        $data['bio'] = AboutMe::BIO;
        $data['socials'] = AboutMe::SOCIAL;
        return view('frontend.dashboard', $data);
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
