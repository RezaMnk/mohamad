<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'quantity' => ['required', 'array'],
            'quantity.*' => ['required', 'numeric']
        ]);

        $sync = [];
        foreach ($request->quantity as $product => $quantity)
        {
            if (is_null(Product::find($product)))
                return redirect()->back()->withErrors(['product' => 'محصول مورد نظر یافت نشد.']);

            $sync[$product] = [
                'quantity' => $quantity
            ];
        }

        $order = auth()->user()->orders()->create([
            'status' => 'unapproved'
        ]);

        $order->products()->sync($sync);

        cart()->clear();

        return redirect()->route('home.profile');
    }

    public function invoice(Order $order)
    {
        return view('site.invoice', compact('order'));
    }
}
