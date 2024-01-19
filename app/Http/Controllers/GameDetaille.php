<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GameDetaille extends Controller
{
    public function Display($id){
        $apiKey = env('API_KEY');
       
        $response = Http::get("https://api.rawg.io/api/games/{$id}?key={$apiKey}&page_size=100");
        $gameData = $response->json(); 
        
        return view('components.frontend.gameDetaille', ['gameData' => $gameData]);
    }
    
}
