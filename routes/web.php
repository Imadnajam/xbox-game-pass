<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\About;
use App\Http\Controllers\cart;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signController;
use App\Http\Controllers\GameDetaille;


Route::get('/',[HomeController::class,'Homepage'])->name('home');
Route::get('/allGames',[gamesController::class,'gameall'])->name('game');
Route::get('/cart',[cart::class,'getPage'])->name('userCart');
Route::get('/aboutp',[About::class,'getPage'])->name('about');

Route::get('/sign_up',[signController::class,'sign'])->name('sign_up');
Route::get('/login',[loginController::class,'login'])->name('login');
Route::get('/game_detail/{id}', [GameDetaille::class, 'Display'])->name('GameDetaille');
