<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class gamesController extends Controller
{
    
        public function gameall(){
            $apiKey = env('API_KEY');
            $perPage = 39;
            $totalPagesToFetch = 20;  
        
            $allGames = [];
        
            for ($page = 1; $page <= $totalPagesToFetch; $page++) {
                $response = Http::get("https://api.rawg.io/api/games?key={$apiKey}&page_size={$perPage}&page={$page}");
        
                // Check if the request was successful
                if ($response->successful()) {
                    // Decode the JSON response
                    $games = $response->json()['results'];
                    
                    // Merge the games into the $allGames array
                    $allGames = array_merge($allGames, $games);
                } else {
                    // Handle error if the request was not successful
                    // You may log the error, return an error response, or take other actions
                    return response()->json(['error' => 'Failed to fetch data from API'], 500);
                }
            }
        
            // Paginate the merged array manually
            $currentPage = request('page', 1);
            $currentPageItems = array_slice($allGames, ($currentPage - 1) * $perPage, $perPage);
        
            // Create a LengthAwarePaginator instance
            $gamesPaginated = new LengthAwarePaginator(
                $currentPageItems,
                count($allGames),
                $perPage,
                $currentPage,
                [
                    'path' => url()->current(),
                ]
            );
        
            return view('games', compact('gamesPaginated'));
        }
        
    
}
