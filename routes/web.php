<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LostPetController;
use App\Http\Controllers\tipsntrickController;

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

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    Route::get('user', [HomeController::class, 'user']);
    Route::get('clinic', [HomeController::class, 'clinic']);
    Route::get('tips', [HomeController::class, 'tips']);
    Route::get('adopt', [HomeController::class, 'adopt']);
    Route::get('lost', [HomeController::class, 'lost']);
    Route::post('clinic/add', [HomeController::class, 'storeClinic']);

});

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//MyPet
Route::resource('pet',PetController::class);

//Profile
Route::prefix('profile')->middleware('auth')->group(function () {
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
Route::get('Lost', [LostPetController::class, 'index']);

//Adoption
Route::get('Adopt', [AdoptionController::class, 'index']);
Route::post('Adopt/change', [AdoptionController::class, 'store']);

//Clinic
Route::prefix('Clinic')->group(function () {
    Route::get('/', [ClinicController::class, 'index']);
});


//Tips & Trick
Route::prefix('tipsntrick')->group(function () {
    Route::get('/', [tipsntrickController::class, 'index']);
});


//About Us

