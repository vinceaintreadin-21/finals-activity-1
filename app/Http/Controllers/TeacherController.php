<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;


class TeacherController extends Controller
{
    public function showStudent($studentId){

        $teachers = Student::with('teacher')->findOrFail($studentId);
        return view('teacher-from-student', ['teachers' =>$teachers]);
    }
}
