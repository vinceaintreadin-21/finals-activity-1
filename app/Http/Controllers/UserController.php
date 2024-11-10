<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($userId){

        $user = User::with(['profile', 'courses'])->findOrFail($userId);
        return view('user-from-profile', ['user' => $user]);
    }

    public function showCourse($userId){

        $user = User::with('courses')->findOrFail($userId);
        return view('user-from-course', ['user' => $user]);
    }
}
