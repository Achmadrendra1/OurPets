<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile', ['title' => "Profile"]);
    }

    public function index()
    {
        return redirect()->to('profile#aboutme');
    }
}
