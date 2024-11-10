<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showUsers($courseId){

        $course = Course::with('users')->findOrFail($courseId);
        return view('course-from-user', ['course' => $course]);
    }
}
