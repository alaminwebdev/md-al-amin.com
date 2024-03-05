<?php

use App\Http\Controllers\FrontController;
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
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/works', [FrontController::class, 'works'])->name('works');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
