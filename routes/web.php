<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/about', fn () => view('about'))->name('about');
    Route::get('/skills', fn () => view('skills'))->name('skills');
    Route::get('/sandbox', fn () => view('sandbox'))->name('sandbox');
    Route::match(['get', 'post'], '/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/resume', [FrontendController::class, 'resume'])->name('resume');
    
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
