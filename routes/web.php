<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gamesController;



Route::get('/',[HomeController::class,'Homepage'])->name('home');
Route::get('/allGames',[gamesController::class,'gameall'])->name('game');

