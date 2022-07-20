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

        toast('محصول با موفقیت با <a href="'. route('home.cart') .'">سبد خرید</a> افزوده شد', 'success');
        return redirect()->back();
    }
}
