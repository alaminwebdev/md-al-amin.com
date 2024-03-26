<?php

namespace App\Http\Controllers;

use App\AboutMe;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;

        return view('backend.projects.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        return view('backend.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'project_name' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'skill_tags' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Allow only image files with max size of 2MB
        ]);

        // Save project details
        $project = Project::create([
            'project_name' => $validatedData['project_name'],
            'short_description' => $validatedData['short_description'],
            'long_description' => $validatedData['long_description'],
        ]);

        // Save skill tags
        $skillTags = explode(',', $validatedData['skill_tags']);
        foreach ($skillTags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $project->tags()->attach($tag->id);
        }

        // Save project images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('projects'), $imageName);
                $project->images()->create(['image_path' => 'projects/' . $imageName]);
            }
        }

        Session::flash('success', 'Project Added Successfully!');
        return redirect()->route('project-list.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editData = Project::find($id);
        return view('backend.projects.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ho_activity_event           =   Project::find($id);
        $ho_activity_event->name     =   $request->name;
        $ho_activity_event->status   =   (int)$request->status;
        $ho_activity_event->save();

        Session::flash('success', 'Head Office Actitvity Event Updated');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
