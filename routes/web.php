<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CultureController;

Route::get('/culture', [CultureController::class, 'index'])->name('culture');

use App\Http\Controllers\AboutController;

// About page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// CV download and view routes
Route::get('/download-cv', [AboutController::class, 'downloadCV'])->name('download.cv');
Route::get('/view-cv', [AboutController::class, 'viewCV'])->name('view.cv');
use App\Http\Controllers\ProjectsController;

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');



Route::get('/certifications', function () {
    return view('certifications');
})->name('certifications');

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

use App\Models\Contact;

Route::get('/admin/messages', function () {
    return Contact::latest()->get();
});



