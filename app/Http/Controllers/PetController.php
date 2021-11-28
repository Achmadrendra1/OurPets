<?php

namespace App\Http\Controllers;
use Storage;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PetModel;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageServiceProvider;

class PetController extends Controller
{


    public function index ()
    {
        $pet_list = PetModel::with('user')->get();
        return view('pet', ['title'=>"My Pet" ,'all_pet' => $pet_list]);
    }

    public function detail ()
    {
        $pet_list = PetModel::with('user')->get();
        return view('pet_detail', ['title'=>"My Pet" ,'all_pet' => $pet_list]);
    }

    public function store(Request $request)
    {
        $add_pet = new PetModel;
        $add_pet->user_id = Auth::user()->id;
        $add_pet->petname = $request->petName;
        $add_pet->animal = $request->animal;
        $add_pet->breed = $request->breed;
        $add_pet->color = $request->Color;
        $add_pet->date_birth = $request->date_birth;
        $add_pet->gender = $request->gender;
        if ($request->hasFile('photo')) {
            $request->validate(['image' => 'mimes:jpeg,bmp,png']);
            $request->photo->store('my_pet', 'public'); 
            $add_pet->photo = $request->photo->hashName();
        }
        $add_pet->status = "Alive";
        $add_pet->save();
        return redirect('/pet');

    }

    public function destroy($pet_list)
    {
        PetModel::where('petid', $pet_list)->delete();
        return redirect('/pet');
    }

    public function update($pet_list)
    {
        //        
        $data = request()->except(['_token']);
        PetModel::where('petid', $pet_list)->update($data);
        return redirect('profile/address');
    }

    public function edit(PetModel $pet_list)
    {
        //
        $pet_list = PetModel::all();
        return view('profile.address', ['title' => "Profile", 'user_loc' => $user_loc]);
    }
}
