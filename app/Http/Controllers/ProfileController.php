<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
    public function index()
    {
        //
        $user_location = UserLocation::all();
        return view('profile.index', ['title' => "Profile",'user_loc' => $user_location]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'loc_name' => 'required',
        // ]);

        $user_location = new UserLocation();
        $user_location->userid = 11;
        $user_location->loc_name = $request->locname;
        $user_location->latitude = $request->lat;
        $user_location->longitude = $request->long;
        $user_location->states = $request->state;
        $user_location->city = $request->City;
        $user_location->district = $request->street;
        $user_location->zipcode = $request->ZipCode;
        $user_location->status = "Active";
        $user_location->save();
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function show(UserLocation $userLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLocation $userLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserLocation $userLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLocation $userLocation)
    {
        //
    }
}
