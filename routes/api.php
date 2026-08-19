<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — Portfolio
|--------------------------------------------------------------------------
*/

// Skills
Route::get('/skills', [SkillController::class, 'index']);

// Projects
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project}', [ProjectController::class, 'show']);

// Experiences
Route::get('/experiences', [ExperienceController::class, 'index']);

// Testimonials
Route::get('/testimonials', [TestimonialController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

// Contact
Route::post('/contact', [ContactController::class, 'store']);
