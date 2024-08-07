<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('dashboard');
Route::get('resume-view', [FrontController::class, 'resume'])->name('resume');
Route::get('projects', [FrontController::class, 'projects'])->name('projects');
Route::get('project-details/{slug}', [FrontController::class, 'projectDetails'])->name('project.details');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');



// Backend
Route::get('resume-download', [ResumeController::class, 'download'])->name('resume.download');
Route::match(['get', 'post'], 'resume-upload', [ResumeController::class, 'upload'])->name('resume.upload');

Route::post('contact-store', [ContactController::class, 'store'])->name('contact.store');

// All Projects
Route::resource('project-list', ProjectController::class);
Route::delete('/project/{projectId}/image/{imageId}', [ProjectController::class, 'deleteImage'])->name('project.delete.image');




