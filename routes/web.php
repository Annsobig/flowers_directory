<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('flowers', App\Http\Controllers\FlowerController::class);
Route::resource('regions', App\Http\Controllers\RegionController::class);
Route::get('/', [App\Http\Controllers\FlowerController::class, 'index']);
