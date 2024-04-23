<?php

namespace App\Http\Controllers;

use App\AboutMe;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        $data['projects']       = Project::latest()->get();
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
            'project_name'      => 'required|string',
            'short_description' => 'required|string',
            'long_description'  => 'required|string',
            'skill_tags'        => 'required|string',
            'images.*'          => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort'              => 'nullable|integer',
            'status'            => 'required|boolean',
        ]);

        // Save project details
        $project = Project::create([
            'project_name'      => $validatedData['project_name'],
            'live_url'          => $request['live_url'],
            'test_url'          => $request['test_url'],
            'host_link'         => $request['host_link'],
            'short_description' => $validatedData['short_description'],
            'long_description'  => $validatedData['long_description'],
            'sort'              => $validatedData['sort'],
            'status'            => $validatedData['status'],
        ]);

        // Save skill tags
        $skillTags = explode(',', $validatedData['skill_tags']);
        foreach ($skillTags as $tagName) {
            $trimmedTagName = trim($tagName); 
            if (!empty($trimmedTagName)) {
                $tag = Tag::firstOrCreate(['name' => $trimmedTagName]);
                $project->tags()->attach($tag->id);
            }
        }

        // Save project images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                //$imageName = time() . '_' . $image->getClientOriginalName();

                $timestamp      = now()->timestamp; // Current timestamp
                $randomString   = Str::random(10); // Random string of length 10
                $hash           = md5($timestamp . $randomString); // MD5 hash
                $extension      = $image->getClientOriginalExtension(); // Get original file extension
                $imageName      = $hash . '.' . $extension; // Combine hash with extension
                $image->move(public_path('img/projects'), $imageName);
                $project->images()->create(['image_path' => 'img/projects/' . $imageName]);
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
        $data['project']        = Project::find($id);
        $data['skills']         = AboutMe::SKILL;
        $data['skill_icons']    = AboutMe::SKILL_ICON;
        return view('backend.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'project_name'      => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description'  => 'required|string',
            'skill_tags'        => 'required|string',
            'images.*'          => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sort'              => 'nullable|integer',
            'status'            => 'required|boolean',
        ]);

        // Find the project by its ID
        $project = Project::findOrFail($id);

        // Update project details
        $project->project_name      = $validatedData['project_name'];
        $project->live_url          = $request['live_url'];
        $project->test_url          = $request['test_url'];
        $project->host_link         = $request['host_link'];
        $project->short_description = $validatedData['short_description'];
        $project->long_description  = $validatedData['long_description'];
        $project->sort              = $validatedData['sort'];
        $project->status            = $validatedData['status'];

        // Update project images
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                //$imageName    = time() . '_' . $image->getClientOriginalName();
                
                $timestamp      = now()->timestamp; // Current timestamp
                $randomString   = Str::random(10); // Random string of length 10
                $hash           = md5($timestamp . $randomString); // MD5 hash
                $extension      = $image->getClientOriginalExtension(); // Get original file extension
                $imageName      = $hash . '.' . $extension; // Combine hash with extension
                $image->move(public_path('img/projects'), $imageName);
                $project->images()->create(['image_path' => 'img/projects/' . $imageName]);
            }
        }

        // Update project tags

        $skillTags = explode(',', $validatedData['skill_tags']);
        $project->tags()->detach(); // Remove existing tags

        foreach ($skillTags as $tagName) {
            $trimmedTagName = trim($tagName); 
            if (!empty($trimmedTagName)) {
                $tag = Tag::firstOrCreate(['name' => $trimmedTagName]);
                $project->tags()->attach($tag->id);
            }
        }

        // Save the updated project
        $project->save();

        Session::flash('success', 'Project Updated Successfully !');
        return redirect()->route('project-list.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

    public function deleteImage($projectId, $imageId)
    {
        // Find the project
        $project = Project::findOrFail($projectId);

        // Find the image by ID
        $image = $project->images()->findOrFail($imageId);

        // Delete the image from the filesystem
        if (file_exists(public_path($image->image_path))) {
            unlink(public_path($image->image_path));
        }

        // Delete the image record from the database
        $image->delete();

        return back()->with('success', 'Image deleted successfully');
    }
}
