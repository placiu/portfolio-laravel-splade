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
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/skills', [FrontendController::class, 'skills'])->name('skills');
    Route::get('/sandbox', [FrontendController::class, 'sandbox'])->name('sandbox');
    Route::get('/resume', [FrontendController::class, 'resume'])->name('resume');
    Route::match(['get', 'post'], '/contact', [FrontendController::class, 'contact'])->name('contact');

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
