<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
        $user = auth()->user();

        $user->cart()->firstOrCreate();
        $cart = $user->cart;

        $cart->products()->attach($productId, ['quantity' => $request->input('quantity', 1)]);

        return to_route('products.find');
    }
}
