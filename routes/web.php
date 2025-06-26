<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
 Route::get('/about-us', [PageController::class, 'about']);
 //sRoute::get('/services', [PageController::class, 'index']);
 Route::get('/careers', [PageController::class, 'careers']);
 Route::get('/contact-us', [PageController::class, 'contact']);
 Route::get('/case-studies', [PageController::class, 'caseStudies']);
// Route::get('/careers', [PageController::class, 'careers']);
// Route::get('/contact-us', [ContactController::class, 'index']);

//Service Routes
Route::get('/services/web-development', [ServiceController::class, 'webDevelopment'])->name('services.web');
Route::get('/services/mobile-app-development', [ServiceController::class, 'mobileAppDevelopment'])->name('services.mobile');
 Route::get('/services/animation', [ServiceController::class, 'animation'])->name('services.animation');
