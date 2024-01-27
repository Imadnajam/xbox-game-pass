<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gamesController;
use App\Http\Controllers\About;
use App\Http\Controllers\CartController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signController;
use App\Http\Controllers\GameDetaille;





Route::get('/',[HomeController::class,'Homepage'])->name('home');
Route::get('/allGames',[gamesController::class,'gameall'])->name('game');
Route::get('/aboutp',[About::class,'getPage'])->name('about');

Route::get('/sign_up',[signController::class,'sign'])->name('sign_up');
Route::get('/login',[loginController::class,'login'])->name('login');
Route::get('/game_detail/{id}', [GameDetaille::class, 'Display'])->name('GameDetaille');
Route::post('/loginv',[loginController::class,'loginVerifUser'])->name('loginVerif');

Route::post('/sign_upV',[signController::class,'sign_up_user'])->name('sign_up_user');


Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'getPage'])->name('userCart');
    Route::get('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('removFromCart');
});
