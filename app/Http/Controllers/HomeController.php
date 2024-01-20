<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;




class HomeController extends Controller
{
    public function Homepage(){

/*
        $filePath = storage_path('app/game4.json');
        $jsonContent = file_get_contents($filePath);
        $games = json_decode($jsonContent, true);
    */
    $apiKey = env('API_KEY');
    $response = Http::get("https://api.rawg.io/api/games?dates=2022-10-10,2024-10-10&key={$apiKey}&page_size=100&page=2");
    
    // Check if the request was successful
    if ($response->successful()) {
        // Decode the JSON response
        $games = $response->json()['results'];
    
        $perPage = 6;
        $currentPage = request('page', 1);
    
        // Paginate the games array manually
        $currentPageItems = array_slice($games, ($currentPage - 1) * $perPage, $perPage);
    
        // Create a LengthAwarePaginator instance
        $gamesPaginated = new LengthAwarePaginator(
            $currentPageItems,
            count($games),
            $perPage,
            $currentPage,
            [
                'path' => url()->current(),
            ]
        );
    
        return view('home', compact('gamesPaginated'));
    }
    
}}