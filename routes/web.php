<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddingAddressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/pet',PetController::class);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('profile/about', [ProfileController::class, 'about']);
Route::get('profile/address', [ProfileController::class, 'address']);
Route::get('profile/settings', [ProfileController::class, 'settings']);


Route::get('/Adopt', function () {
    return view('Adoption', [
        'title' => "Adoption"
    ]); 
});

Route::get('/Lost', function () {
    return view('lost_pet', [
        'title' => "Lost Pet"
    ]);
});


Auth::routes();