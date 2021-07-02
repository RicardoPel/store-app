<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/store/historial'); // return view('/store/historial')

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::resource('store', StoreController::class)->middleware(['auth', 'verified']);

Auth::routes([ 'verify' => true ]);

