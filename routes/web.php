<?php

use App\Http\Controllers\AircraftController;
use App\Http\Controllers\FlightmasterController;
use App\Http\Controllers\FlighttransactionController;
use App\Http\Controllers\PassengerController;
use App\Models\Flightmaster;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/',[PassengerController::class,'index'])->name('home');
Route::post('/store',[PassengerController::class,'store'])->name('storePassenger');
Route::get('/deletePasenger/{id}',[PassengerController::class,'destroy']);
Route::get('/UpadetePassenger/{id}',[PassengerController::class,'edit'])->name('loadUpdate');
Route::post('/UpadetePassenger/{id}',[PassengerController::class,'update'])->name('UpdatePassenger');

Route::get('/flightMaster',[FlightmasterController::class,'index'])->name('flightMaster');
Route::post('/flightMaster/store',[FlightmasterController::class,'store'])->name('storeflightMaster');
Route::get('/flightMaster/delete/{id}',[FlightmasterController::class,'destroy'])->name('destroy');
Route::get('/flightMaster/update/{id}',[FlightmasterController::class,'edit'])->name('flightMaster.load');
Route::post('/flightMaster/update/{id}',[FlightmasterController::class,'update'])->name('Update.Master');

Route::get('/airCraft',[AircraftController::class,'index'])->name('loadairCraft');
Route::post('/airCraft/store',[AircraftController::class,'store'])->name('storeAirCraft');
Route::get('/airCraft/delete/{id}',[AircraftController::class,'destroy'])->name('deleteAir');
Route::get('/airCraft/update/{id}',[AircraftController::class,'edit'])->name('airCraft.load');
Route::post('/airCraft/updated/{id}',[AircraftController::class,'update'])->name('Update.airCraft');

Route::get('/flightTransaction',[FlighttransactionController::class,'index'])->name('loadTransaction');
