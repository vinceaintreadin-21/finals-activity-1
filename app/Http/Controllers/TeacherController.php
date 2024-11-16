<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;


class TeacherController extends Controller
{
    public function showStudent($studentId){
        return view('teacher-from-class');
    }
}
