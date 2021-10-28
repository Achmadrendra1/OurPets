<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddingAddressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\location;


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

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'about']);
    Route::post('address/create', [ProfileController::class, 'store']);
    Route::get('address/destroy/{id}', [ProfileController::class ,'destroy'])->name('address.destroy');
    Route::get('address', [ProfileController::class, 'address']);
    Route::get('settings', [ProfileController::class, 'settings']);
    Route::post('settings/save', [ProfileController::class, 'changePassword']);
});

Route::post('lost/create', [location::class, 'index']);

Route::get('Adopt', function () {
    return view('Adoption', [
        'title' => "Adoption"
    ]); 
});

Route::get('Lost', function () {
    return view('lost_pet', [
        'title' => "Lost Pet"
    ]);
});

Auth::routes();