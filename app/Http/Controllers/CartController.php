<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    public function find()
    {
        $cart = $this->getOrCreateCart();
        $cart->load('products');

        return Inertia::render('Cart/Overview', [
            'cart' => $cart,
        ]);
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = $this->getOrCreateCart();
        $cart->products()->attach($productId);

        return to_route('products.find');
    }

    public function removeFromCart($productId)
    {
        $cart = $this->getOrCreateCart();
        $cart->products()->detach($productId);
        $cart->load('products');

        return Inertia::render('Cart/Overview', [
            'cart' => $cart,
        ]);   
    }

    private function getOrCreateCart() {
        $user = auth()->user();
        $user->cart()->firstOrCreate();
        $cart = $user->cart;
        return $cart;
    }
}
