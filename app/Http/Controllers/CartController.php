<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => ['required', 'numeric', 'min:1', 'max:999']
        ]);

        cart()->put($product, $request->quantity);

        return redirect()->route('home.cart');
    }
}
