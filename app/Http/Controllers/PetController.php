<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PetModel;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{


    public function index ()
    {
        $pet_list = PetModel::with('user')->get();
        return view('pet', ['title'=>"My Pet" ,'all_pet' => $pet_list]);
    }

    public function store(Request $request)
    {

        $add_pet = new PetModel;
        $add_pet->user_id = Auth::user()->id;
        $add_pet->petname = $request->petName;
        $add_pet->animal = $request->animal;
        $add_pet->breed = $request->breed;
        $add_pet->birth_month = $request->month;
        $add_pet->birth_year = $request->year;
        $add_pet->gender = $request->gender;
        $add_pet->color = $request->Color;
        $add_pet->photo = $request->file('photo')->store('my_pet');
        $add_pet->status = "Alive";
        $add_pet->save();
        return redirect('/pet');

    }
}
