<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LostPetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $long = $request->long;
        $lat = $request->lat;
        $user_loc = UserLocation::all();
        foreach ($user_loc as $loc)
        {
            if ($loc['status'] == 'Active') {
            $address = $loc['loc_name'] ." : ". $loc['street'] . ", " . $loc['city'] . ", " . $loc['zipcode'];
            $long1 = $loc['longitude'];
            $lat1 = $loc['latitude'];
        }
    }
        if (!isset($address)) {
            $loc = "Alamat Belum Ditambahkan";
        }
        else {
            $loc = $address;
        }


        return view('lost_pet', [
            'title' => 'Lost Pet',
            'address' => $loc,
            // 'long' => $long1,
            // 'lat' => $lat1,
        ]);
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
        $long = $request->long;
        $lat = $request->lat;
        $user_loc = UserLocation::all();
        foreach ($user_loc as $loc) {
            // $address = $loc['loc_name'] . " : " . $loc['district'] . ", " . $loc['city'] . ", " . $loc['zipcode'];
            $long1 = $loc['longitude'];
            $lat1 = $loc['latitude'];
        }

        $respone = Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/' . $long . ',' . $lat . '.json?country=id&limit=1&access_token=pk.eyJ1IjoiYWNobWFkcmVuZHJhMSIsImEiOiJja3VqdXlwZnkzMXh5MnZuemY0dXlxajd3In0.UI_gQ4TAo_CwXdZVduEIxQ');
        $features = $respone->json('features');
        foreach ($features as $value) {
            $place = $value['place_name'];
        }

        

        return view('lost_pet', [
            'title' => 'Lost Pet',
            'place' => $place,
            'long' => $long1,
            'lat' => $lat1,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
