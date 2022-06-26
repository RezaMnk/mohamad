<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
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

        $products = $products->latest()->paginate(20);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::where('parent_id', 0)->get();
        $attributes = Attribute::where('parent_id', 0)->get();

        $attributes_json = [];
        foreach($attributes as $attribute) {
            $attributes_json[$attribute->id] = [
                'name' => $attribute->name,
                'children' => $attribute->children
            ];
        }
        $attributes_json = json_encode($attributes_json);

        return view('admin.products.create', compact('attributes', 'categories', 'attributes_json'));
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

        Product::create($data);

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

        alert('عملیات موفقیت آمیز بود','محصول با موفقیت حذف شد', 'success');
        return back();
    }
}
