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
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        return view('frontend.dashboard', $data);
    }
    public function resume()
    {
        $fileName       = 'resume_of_md_al_amin.pdf';
        $filePath       = public_path('resume');
        $skills         = AboutMe::SKILL;
        $skill_icons    = AboutMe::SKILL_ICON;

        // Check if file already exists, if so, enter page
        if (File::exists($filePath . '/' . $fileName)) {
            return view('frontend.resume', compact('fileName','skills','skill_icons'));
        }
        return redirect()->back()->with('warning', 'Resume not Found!');

    }
    public function projects()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        return view('frontend.projects', $data);
    }
    public function contact()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        $data['contacts']       = AboutMe::CONTACT;
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        return view('frontend.contact', $data);
    }
}
