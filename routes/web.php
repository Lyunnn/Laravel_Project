<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;


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

Route::get('/', function () {
    return view('index');
});

// Route::get('portfolio/education', function () {
//     return view('portfolio/education');
// });

// Route::get('portfolio/skills', function () {
//     return view('portfolio/skills');
// });

// Route::get('portfolio/experience', function () {
//     return view('portfolio/experience');
// });

Route::resource('home', HomeController::class);
Route::resource('contact', ContactController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('skill', SkillController::class);