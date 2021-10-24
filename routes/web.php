<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddingAddressController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');



Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::resource('/profile/MyAddress',AddingAddressController::class);

Route::get('/pet', function () {
    return view('pet', [
        'title' => "My Pet"
    ]);
});

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


