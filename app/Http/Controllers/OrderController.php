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


    /**
     * create order by cart data
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
        if (
            ($order->user_id != auth()->user()->id)
            && !(auth()->user()->admin)
        )
            abort(404);

        return view('site.invoice', compact('order'));
    }

    /**
     * set order to canceled status
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Request $request)
    {
        $request->validate([
            'order' => ['required', 'numeric', 'exists:orders,id']
        ]);

        $order = Order::find($request->order);

        if ($order->status == 'unapproved')
            $order->cancel();

        alert()->success('عملیات موفقیت آمیز بود', 'سفارش با موفقیت لغو گردید');
        return redirect()->back();
    }
}
