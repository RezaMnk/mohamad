<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
            $products->where('name', 'LIKE', "%$keyword%")->orWhere('description', 'LIKE', "%$keyword%")->orWhere('short_description', 'LIKE', "%$keyword%");
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
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'numeric', 'exists:categories,id'],
            'image' => ['required'],
            'attributes' => ['array'],
            'weight' => ['required', 'numeric', 'digits_between:1,10'],
            'code' => ['required', 'numeric', 'digits_between:1,10'],
            'description' => ['string', 'nullable'],
            'short_description' => ['string', 'nullable', 'max:1000'],
        ]);

        if (!Storage::disk('products')->exists($data['image']))
            return back()->withErrors(['image' => 'تصویر مورد نظر یافت نشد.']);

        $product = Product::create($data);

        $product->gallery()->create($request->only('image'));

        $product->categories()->sync($data['category']);

        if($data['attributes'])
            $product->attributes()->sync($data['attributes']);

        if($request->status)
            $product->update(['status' => true]);

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

        return view('admin.products.edit', compact('product', 'attributes', 'categories', 'attributes_json'));
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
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'numeric', 'exists:categories,id'],
            'image' => ['required'],
            'attributes' => ['array'],
            'weight' => ['required', 'numeric', 'digits_between:1,10'],
            'code' => ['required', 'numeric', 'digits_between:1,10'],
            'description' => ['string', 'nullable'],
            'short_description' => ['string', 'nullable', 'max:1000'],
        ]);

        $product->fill($data)->save();
        $product->categories()->sync($data['category']);

        $product->attributes()->sync($data['attributes'] ?? []);

        if($request->status)
            $product->update(['status' => true]);
        else
            $product->update(['status' => false]);

        alert('عملیات موفقیت آمیز بود','محصول با موفقیت ویرایش شد', 'success');
        return redirect()->route('admin.products.index');
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
