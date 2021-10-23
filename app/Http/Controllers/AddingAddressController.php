<?php

namespace App\Http\Controllers;
use App\Models\AddingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_location = AddingAddress::latest()->paginate(5);

       return view('profile',compact('user_location'))
                    ->with('i',(request()->input('page',1)-1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('user_location.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'locid' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'locname' => 'required',
            'status' => '1',
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('AddingAddress.index')
                        ->with('success','Product created successfully.');
    }
}
