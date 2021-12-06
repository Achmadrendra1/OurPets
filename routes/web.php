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
Route::prefix('mypet')->middleware('auth')->group(function () {
    Route::get('/', [PetController::class, 'index']);
    Route::post('add_pet', [PetController::class, 'store']);
    Route::get('destroy/{id}', [PetController::class ,'destroy']);
    Route::post('update/{id}', [PetController::class ,'update']);
    Route::get('detail/{id}', [PetController::class, 'detail']);
});

//Profile
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'about']);
    Route::post('address/create', [ProfileController::class, 'store']);
    Route::get('address/destroy/{id}', [ProfileController::class ,'destroy']);
    Route::post('address/update/{id}', [ProfileController::class ,'update']);
    Route::get('address/default/{id}', [ProfileController::class, 'default']);
    Route::get('address', [ProfileController::class, 'address']);
    Route::get('settings', [ProfileController::class, 'settings']);
    Route::post('settings/save', [ProfileController::class, 'changePassword']);
});

//Lost Pet
Route::prefix('lost_pet')->middleware('auth')->group(function () {
    Route::post('/change', [LostPetController::class, 'store']);
    Route::get('/', [LostPetController::class, 'index']);
});


//Adoption
Route::prefix('Adopt')->middleware('auth')->group(function () {
    Route::post('/change', [AdoptionController::class, 'store']);
    Route::get('/', [AdoptionController::class, 'index']);
});

//Clinic
Route::prefix('Clinic')->group(function () {
    Route::get('/', [ClinicController::class, 'index']);
});


//Tips & Trick
Route::prefix('tipsntrick')->group(function () {
    Route::get('/', [tipsntrickController::class, 'index']);
});


//About Us

