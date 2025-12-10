<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about');
    }

    /**
     * Download CV file.
     */
    public function downloadCV()
    {
        $filePath = public_path('documents/Charlene-Cansing-CV.pdf');
        
        if (file_exists($filePath)) {
            return response()->download($filePath, 'Charlene-Cansing-CV.pdf');
        }
        
        abort(404, 'CV file not found.');
    }

    /**
     * View CV file in browser.
     */
    public function viewCV()
    {
        $filePath = public_path('documents/Charlene-Cansing-CV.pdf');
        
        if (file_exists($filePath)) {
            return response()->file($filePath);
        }
        
        abort(404, 'CV file not found.');
    }
}