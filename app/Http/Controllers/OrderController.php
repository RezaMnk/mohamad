<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
            'quantity.*' => ['required', 'numeric', 'min:1']
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

        $order->user->send_sms([$order->id], 'order-created');

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

        $order->user->send_sms([$order->id], 'order-canceled');

        alert()->success('عملیات موفقیت آمیز بود', 'سفارش با موفقیت لغو گردید');
        return redirect()->back();
    }


    public function reorder(Request $request)
    {
        $request->validate([
            'order' => ['required', 'numeric', 'exists:orders,id'],
        ]);

        $order = Order::find($request->order);
        if ($order->status == 'priced' && !$order->time_to_pay)
        {
            $order->status = 'unapproved';
            $order->priced_at = null;
            $order->save();

            foreach($order->products as $product) {
                $product->pivot->price = null;
                $product->save();
            }

            $order->user->send_sms([$order->id], 'order-created');

            alert()->success('عملیات موفقیت آمیز بود', 'سفارش با موفقیت مجددا ثبت گردید');
            return redirect()->back();
        }
    }


    public function upload_receipt(Request $request)
    {
        $request->validate([
            'receipt' => ['required', 'max:10000', 'mimes:jpg,jpeg,png'],
            'order' => ['required', 'numeric', 'exists:orders,id'],
        ]);
        $order = Order::find($request->order);

        if ($order->status != 'priced')
            return false;


        $file_name = time() . '.' . $request->file('receipt')->getClientOriginalExtension();

        $path_name = auth()->user()->id ."/$file_name";

        Storage::disk('receipts')->put($path_name, file_get_contents($request->file('receipt')));

        $order->receipt = '/'. $path_name;
        $order->status = 'paid';
        $order->save();

        return true;
    }
}
