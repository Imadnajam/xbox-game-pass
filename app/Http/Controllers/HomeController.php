<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;




class HomeController extends Controller
{
    public function Homepage(){

        $filePath = storage_path('app/game2.json');
        $jsonContent = file_get_contents($filePath);
        $games = json_decode($jsonContent, true);
    
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
}}