<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return redirect()->to('profile#aboutme');
    }

    public function profile()
    {   
        $user_location = DB::table('user_location')->get();
        return view('profile', ['title' => "Profile"],['user_location' => $user_location]);
    }
}
