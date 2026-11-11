<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/teachers/featured', [TeacherController::class, 'featured'])
    ->name('teachers.featured');

Route::resource('movies', MovieController::class)
    ->middlewareFor('index','check.genre');

Route::resource('teachers', TeacherController::class)
    ->only(['index', 'show']);



