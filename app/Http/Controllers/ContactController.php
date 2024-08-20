<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            // 'name'      => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            // 'subject'   => 'required|string',
            'comments'  => 'required|string',
        ]);

        try {
            // Create a new Contact instance
            $contact            = new Contact();
            // $contact->name      = $validatedData['name'];
            $contact->email     = $validatedData['email'];
            // $contact->subject   = $validatedData['subject'];
            $contact->comments  = $validatedData['comments'];
            $contact->save();

            // Return a JSON response with the saved Contact data
            return response()->json(['success' => 'Message sent successfully!'], 200);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., database errors)
            return response()->json(['error' => 'Failed to send message. Please try again.'], 500);
        }
    }
}
