<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * add product to cart
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $request->validate([
            'quantity' => ['required', 'numeric', 'min:1', 'max:999'],
            'product' => ['required', 'numeric', 'exists:products,id']
        ]);

        $product = Product::find($request->product);

        if (cart()->get($product))
            cart()->update($product, $request->quantity);
        else
            cart()->put($product, $request->quantity);

        toast('محصول با موفقیت با <a href="'. route('home.cart') .'">سبد خرید</a> افزوده شد', 'success');
        return redirect()->back();
    }


    /**
     * remove product from cart
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Request $request, Product $product)
    {
        cart()->remove($product);

        alert()->success('عملیات موفقیت آمیز بود', 'محصول با موفقیت از سبد خرید حذف شد');
        return redirect()->back();
    }
}
