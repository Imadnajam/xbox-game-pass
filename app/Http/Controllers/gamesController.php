<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class gamesController extends Controller
{
    public function gameall(){
        $filePath = storage_path('app/game5.json');
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
    
        return view ('games',compact('gamesPaginated'));
    }

    
}
