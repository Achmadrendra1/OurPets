<?php

namespace App\Http\Controllers;

use App\Models\ClinicModel;
use Illuminate\Http\Request;
use App\Models\User;

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
        $clinic = ClinicModel::count();
        return view('Admin.index', ['title' =>"Admin", 'clinic' => $clinic]);
    }

    public function user()
    {
    $user = user::all();
        return view('Admin.user', ['title' => "Admin - User", 'user' => $user]);
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
        $clinic = ClinicModel::all();
        return view('Admin.clinic', ['title' => "Admin - Clinic", 'clinic' => $clinic]);
    }

    public function storeClinic(Request $request)
    {

        $add_clinic = new ClinicModel();
        $add_clinic->name = $request->name_clinic;
        $add_clinic->address = $request->address_clinic;
        $add_clinic->long = $request->long_clinic;
        $add_clinic->lat = $request->lat_clinic;
        $add_clinic->info = $request->info_clinic;
        $add_clinic->photo = $request->photo;
        $add_clinic->save();
        return redirect('admin/clinic');
    }
}
