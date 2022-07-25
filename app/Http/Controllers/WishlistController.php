<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * add product to wishlist
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $request->validate([
            'product' => ['required', 'numeric', 'exists:products,id']
        ]);

        if (auth()->user()->wishlist()->where('product_id', $request->product))
            return redirect()->back()->withErrors(['product' => 'محصول در لیست علاقه مندی ها وجود دارد']);

        auth()->user()->wishlist()->create([
            'product_id' => $request->product
        ]);

        toast('محصول با موفقیت با <a href="'. route('home.wishlist') .'">علاقه مندی ها</a> افزوده شد', 'success');
        return redirect()->back();
    }


    /**
     * remove product from wishlist
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Request $request)
    {
        $request->validate([
            'product' => ['required', 'numeric', 'exists:products,id']
        ]);

        auth()->user()->wishlist->find($request->product)->delete();

        alert()->success('عملیات موفقیت آمیز بود', 'محصول با موفقیت از علاقه مندی ها حذف شد');
        return redirect()->back();
    }
}
