<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutMe;
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
            return view('frontend.resume', compact('fileName', 'skills', 'skill_icons'));
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

        // Your array of projects
        $projects = [
            [
                'url' => 'https://picsum.photos/id/0/5000/3333',
                'name' => 'Highlands',
                'location' => 'Scotland',
                'description' => 'The mountains are calling'
            ],
            [
                'url' => 'https://picsum.photos/id/1/5000/3333',
                'name' => 'Machu Pichu',
                'location' => 'Peru',
                'description' => 'Adventure is never far away'
            ],
            [
                'url' => 'https://picsum.photos/id/5/5000/3334',
                'name' => 'Chamonix',
                'location' => 'France',
                'description' => 'Let your dreams come true'
            ],
            [
                'url' => 'https://picsum.photos/id/6/5000/3333',
                'name' => 'Highlands',
                'location' => 'Scotland',
                'description' => 'The mountains are calling'
            ],
            [
                'url' => 'https://picsum.photos/id/7/4728/3168',
                'name' => 'Machu Pichu New',
                'location' => 'Peru New',
                'description' => 'Adventure is never far away'
            ],
            [
                'url' => 'https://picsum.photos/id/10/2500/1667',
                'name' => 'Machu Pichu New',
                'location' => 'Peru New',
                'description' => 'Adventure is never far away'
            ],
            [
                'url' => 'https://picsum.photos/id/11/2500/1667',
                'name' => 'Machu Pichu New',
                'location' => 'Peru New',
                'description' => 'Adventure is never far away'
            ]
        ];

        // Convert the array into a collection
        $data['projects'] = collect($projects);

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
