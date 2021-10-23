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

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'profile']);
});

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
