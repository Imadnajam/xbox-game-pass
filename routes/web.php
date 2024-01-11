<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\loginController;



Route::get('/',[HomeController::class,'Homepage'])->name('home');
Route::get('/allGames',[gamesController::class,'gameall'])->name('game');
Route::get('/login',[loginController::class,'login'])->name('login');

