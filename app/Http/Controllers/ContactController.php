<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate form fields
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        // Store message in database
        Contact::create($validated);

        // Queue email notification (processed by queue worker in background)
        Mail::to('charlene.cansingg@gmail.com')->queue(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
