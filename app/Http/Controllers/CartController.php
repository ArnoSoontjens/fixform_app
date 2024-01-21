<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function find()
    {
        $user = auth()->user();

        $user->cart()->firstOrCreate();

        $cart = $user->cart;
        $cart->load('products');

        return response()->json($cart);
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = auth()->user()->cart;

        $cart->products()->attach($productId, ['quantity' => $request->input('quantity', 1)]);

        return response()->json(['message' => 'Product added to the cart']);
    }
}
