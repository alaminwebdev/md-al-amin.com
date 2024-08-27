<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;

class FrontController extends Controller
{
    public function index()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        $data['skills']         = AboutMe::SKILL_DATA;
        $data['contacts']       = AboutMe::CONTACT;
        $data['projects']       = Project::with('images')->where('status', 1)->orderBy('sort', 'asc')->get();
        return view('frontend.dashboard', $data);
    }
    public function resume()
    {
        $fileName       = 'resume_of_md_al_amin.pdf';
        $filePath       = public_path('resume');
        $bio            = AboutMe::BIO;
        $socials        = AboutMe::SOCIAL;
        // Check if file already exists, if so, enter page
        if (File::exists($filePath . '/' . $fileName)) {
            return view('frontend.resume', compact('fileName', 'bio', 'socials'));
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
        $data['projects']       = Project::with('images')->where('status', 1)->orderBy('sort', 'asc')->get();

        return view('frontend.projects', $data);
    }

    public function projectDetails($slug)
    {
        $data['projectData']    = Project::where('slug', $slug)->firstOrFail();
        $data['skills']         = AboutMe::SKILL_DATA;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        $data['other_projects'] = Project::where('slug', '!=', $slug)->where('status', 1)->orderBy('sort', 'asc')->get();
        return view('frontend.projects-details', $data);
    }
    public function contact()
    {
        $data['educations']     = AboutMe::EDUCATION;
        $data['experiences']    = AboutMe::EXPERIENCE;
        $data['bio']            = AboutMe::BIO;
        $data['socials']        = AboutMe::SOCIAL;
        $data['contacts']       = AboutMe::CONTACT;
        $data['skills']         = AboutMe::SKILL_DATA;
        return view('frontend.contact', $data);
    }
}
