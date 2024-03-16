<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class ResumeController extends Controller
{
    public function download()
    {
        $file = public_path().'/resume/resume_of_md_al_amin.pdf';
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        return Response::download($file, 'resume_of_md_al_amin.pdf', $headers);
    }
    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'resume' => 'required|mimes:pdf|max:2048',
            ]);

            $file = $request->file('resume');
            $fileName = 'resume_of_md_al_amin.pdf'; 
            $filePath = public_path('resume');

            // Check if file already exists, if so, delete it
            if (File::exists($filePath . '/' . $fileName)) {
                File::delete($filePath . '/' . $fileName);
            }

            // Store the new file
            $file->move($filePath, $fileName);
            return redirect()->back()->with('success', 'Resume uploaded successfully!');
        }
        return view('frontend.resume-upload');
    }
}
