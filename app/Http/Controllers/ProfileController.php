<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
        return view('profile.index', ['title' => "Profile", 'Auth' => '']);
        
    } 

    public function about()
    {
        return view('profile.about', ['title' => "Profile", 'Auth' => '']);
    }

    public function address()
    {
        $user_loc = UserLocation::all();
        return view('profile.address', ['title' => "Profile", 'user_loc' => $user_loc , 'Auth' => '']);
        return $user_loc->toJson();
    }


    public function settings()
    {
        $user_loc = UserLocation::all();
        return view('profile.setting', ['title' => "Profile", 'user_loc' => $user_loc , 'Auth' => '']);
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
        //     'city' => 'required',
        //     'zipcode' => 'required',
        // ]);

        $user_location = new UserLocation();
        $user_location->email = Auth::user()->email;
        $user_location->loc_name = $request->locname_add;
        $user_location->latitude = $request->lat_add;
        $user_location->longitude = $request->long_add;
        $user_location->states = $request->state_add;
        $user_location->city = $request->City_add;
        $user_location->district = $request->street_add;
        $user_location->zipcode = $request->ZipCode_add;
        $user_location->country = $request->country_add;
        $user_location->status = "Active";
        $user_location->save();
        return redirect('profile/address');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $userPassword = $user->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success', 'password successfully updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLocation $user_loc)
    {
        //
        $user_loc = UserLocation::all();
        return view('profile.address', ['title' => "Profile", 'user_loc' => $user_loc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function update($user_loc)
    {
        //        
        $data = request()->except(['_token']);
        UserLocation::where('id', $user_loc)->update($data);
        return redirect('profile/address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLocation  $userLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy($userLocation)
    {
        UserLocation::where('id', $userLocation)->delete();
        return redirect('profile/address');
    }
}
