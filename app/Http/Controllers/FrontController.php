<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;
use Illuminate\Support\Facades\File;

class FrontController extends Controller
{
    public function index()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        return view('frontend.dashboard', $data);
    }
    public function resume()
    {
        $fileName = 'resume_of_md_al_amin.pdf';
        $filePath = public_path('resume');

        // Check if file already exists, if so, delete it
        if (File::exists($filePath . '/' . $fileName)) {
            return view('frontend.resume', compact('fileName'));
        }
        return redirect()->back()->with('warning', 'Resume not Found!');

    }
    public function works()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        return view('frontend.dashboard', $data);
    }
    public function contact()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        return view('frontend.dashboard', $data);
    }
}
