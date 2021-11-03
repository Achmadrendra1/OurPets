<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['title' => "Home"]);
    }

    public function adminHome()
    {
        return view('Admin.index', ['title' => "Admin"]);
    }

    public function user()
    {
        return view('Admin.user', ['title' => "Admin - User"]);
    }
    public function tips()
    {
        return view('Admin.tips', ['title' => "Admin - Tips & Trick"]);
    }
    public function adopt()
    {
        return view('Admin.adopt', ['title' => "Admin - Adoption"]);
    }
    public function lost()
    {
        return view('Admin.lost', ['title' => "Admin - Lost Pet"]);
    }
    public function clinic()
    {
        return view('Admin.clinic', ['title' => "Admin - Clinic"]);
    }
}
