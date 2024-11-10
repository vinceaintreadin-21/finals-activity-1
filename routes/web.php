<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

#shows all users with the profile model
Route::get('/profiles/users', [ProfileController::class, 'showAllUser'])->name('showAllUser');

#show profile via user model
Route::get('/user/{id}/profile', [UserController::class, 'showProfile'])->name('showProfile');

#show courses from a user
Route::get('/user/{id}/courses', [UserController::class, 'showCourse'])->name('showCourse');

#show all users from a course model
Route::get('/course/{id}/users', [CourseController::class, 'showUsers'])->name('showUsers');
