<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::query();

        if ($keyword = request('search')) {
            $products->where('title', 'LIKE', "%$keyword%")->orWhere('description', 'LIKE', "%$keyword%")->orWhere('short_description', 'LIKE', "%$keyword%");
        }

        $products = $products->latest()->paginate(2);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        auth()->user()->products()->create($data);

        alert('عملیات موفقیت آمیز بود','محصول با موفقیت به لیست محصولات اضافه شد', 'success');
        return redirect()->route('admin.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([

        ]);


        $product->update($data);

        alert('عملیات موفقیت آمیز بود','محصول با موفقیت ویرایش شد', 'success');
        return redirect($request->session()->get('redirect_url'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        alert('عملیات موفقیت آمیز بود','کاربر با موفقیت ویرایش شد', 'success');
        return back();
    }
}
