<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function find()
    {
        $products = Product::all();

        return Inertia::render('Products/Overview', [
            'products' => $products,
        ]);
    }

    public function findOne($id)
    {
        $product = Product::find($id);
        $cart = auth()->user()->cart;
        $cart->load('products');

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

         return Inertia::render('Products/Detail', [
            'product' => $product,
            'cart' => $cart,
        ]);
    }
}
