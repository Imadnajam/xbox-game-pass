<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getPage()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        // Assuming you want to add a game with the given ID to the cart
        $cartItem = new cart();
        $cartItem->game_id = $id;
        $cartItem->user_id = auth()->id(); // Assuming the user is authenticated
        $cartItem->save();

        // You might want to redirect back or to another page after adding to the cart
        return redirect()->route('home')->with('success', 'Item added to cart successfully');
    }
}
