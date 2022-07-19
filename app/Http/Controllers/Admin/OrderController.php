<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $orders = Order::query();

        if ($keyword = request('search')) {
            $orders->whereHas('user', function($query) use ($keyword) {
                $query->where('name', 'LIKE', "%$keyword%");
            })
            ->orWhere('id', 'LIKE', "%$keyword%");
        }

        $orders = $orders->latest()->paginate(20);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        /*
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

        return view('admin.orders.create', compact('attributes', 'categories', 'attributes_json'));
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /*
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

        if (!Storage::disk('orders')->exists($data['image']))
            return back()->withErrors(['image' => 'تصویر مورد نظر یافت نشد.']);

        $order = Order::create($data);

        $order->categories()->sync($data['category']);

        if($request->status)
            $order->update(['status' => true]);

        alert('عملیات موفقیت آمیز بود','سفارش با موفقیت به لیست سفارشات اضافه شد', 'success');
        return redirect()->route('admin.orders.index');
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'quantity' => ['required', 'array'],
            'quantity.*' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'array'],
            'price.*' => ['required', 'numeric'],
        ]);

        if (array_keys($data['quantity'] ) !== array_keys($data['price']))
            return redirect()->back()->withErrors(['ids' => 'مقادیر وارد شده معتبر نمی باشد. صفحه را رفرش کنید.']);

        $sync = [];
        foreach($data['quantity'] as $product_id => $quantity)
            $sync[$product_id] = [
                'quantity' => $quantity,
                'price' => $data['price'][$product_id],
            ];

        $order->products()->sync($sync);
        $order->priced();

        alert('عملیات موفقیت آمیز بود','سفارش با موفقیت ویرایش شد', 'success');
        return redirect()->route('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Order $order)
    {
        /*
        $order->delete();

        alert('عملیات موفقیت آمیز بود','سفارش با موفقیت حذف شد', 'success');
        return back();
        */
    }
}
