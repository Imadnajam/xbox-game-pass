<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
 
public function getPage()
{
    $gameIds = Cart::where('user_id', auth()->id())->pluck('game_id')->toArray();

    $apiKey = env('API_KEY');
    $games = [];

    foreach ($gameIds as $id) {
        $response = Http::get("https://api.rawg.io/api/games/{$id}?key={$apiKey}");
        $games[] = $response->json(); 
    }

    return view('cart', ['games' => $games]);
}

    public function addToCart($id)
    {
     
        $cartItem = new cart();
        $cartItem->game_id = $id;
        $cartItem->user_id = auth()->id();
        $cartItem->save();

    
        return back()->with('success', 'Item added to cart successfully');
    }
    public function removeFromCart($id)
    {
        cart::destroy($id);
        return back()->with('success', 'Item removed from cart successfully');

    }
}