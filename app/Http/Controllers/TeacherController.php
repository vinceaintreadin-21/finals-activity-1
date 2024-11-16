<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;


class TeacherController extends Controller
{
    public function showStudent($studentId){

        // Retrieve the student
        $student = Student::with('teacher')->findOrFail($studentId);

        // Get the teacher associated with this student
        $teacher = $student->teacher;

        // Fetch all students assigned to this teacher
        $studentsOfTeacher = $teacher ? $teacher->students : collect();

        return view('teacher-from-student', [
            'teacher' => $teacher,
            'studentsOfTeacher' => $studentsOfTeacher,
        ]);
    }
}
