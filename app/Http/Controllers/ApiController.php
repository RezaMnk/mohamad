<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function update_cart(Request $request)
    {
        $request->validate([
            'product' => ['required', 'numeric', 'exists:products,id'],
            'quantity' => ['required', 'numeric', 'min:1']
        ]);

        $product = Product::find($request->product);
        return cart()->update($product, $request->quantity, true);
    }
}
