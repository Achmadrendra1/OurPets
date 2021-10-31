<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LostPetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth
Auth::routes();

//Home
Route::get('/', [HomeController::class, 'index']);

//MyPet
Route::resource('pet',PetController::class);

//Profile
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'about']);
    Route::post('address/create', [ProfileController::class, 'store']);
    Route::get('address/destroy/{id}', [ProfileController::class ,'destroy']);
    Route::post('address/update/{id}', [ProfileController::class ,'update']);
    Route::get('address', [ProfileController::class, 'address']);
    Route::get('settings', [ProfileController::class, 'settings']);
    Route::post('settings/save', [ProfileController::class, 'changePassword']);
});

//Lost Pet
Route::post('Lost/change', [LostPetController::class, 'store']);
Route::get('/Lost', [LostPetController::class, 'index']);

//Adoption
Route::get('Adopt', [AdoptionController::class, 'index']);
Route::post('Adopt/change', [AdoptionController::class, 'store']);

//Clinic
Route::get('Clinic', function() {
    return view('clinic', ['title' => 'Clinic']);
});


//Tips & Trick


//About Us

