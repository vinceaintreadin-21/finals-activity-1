<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    public function showAllUser(){
        $profiles = Profile::with('user')->get();

        return view('all-profile-from-users', ['profiles' => $profiles]);
    }

    public function showUser($profileId){ #easter egg

        $profile = Profile::with('user')->findOrFail($profileId);
        return view('profile-from-user', ['profile' => $profile]);
    }
}
