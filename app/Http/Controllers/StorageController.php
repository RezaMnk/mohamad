<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{

    public function get_file($file)
    {
        $path = storage_path('app/uploads'. $file);
        try {
            $file = File::get($path);
            $type = File::mimeType($path);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        } catch (FileNotFoundException $exception) {
            dd($exception);
            abort(404);
        }
    }

    public function receipt(Order $order)
    {
        if (Auth::check() && $order->user->id == auth()->user()->id) {
            if ($order->receipt)
                return $this->get_file('/receipts'. $order->receipt);
            return abort(404);
        }
        return abort(404);
    }

    public function remove_receipt(Request $request)
    {
        $request->validate([
            'order' => ['required', 'numeric', 'exists:orders,id']
        ]);

        $order = Order::find($request->order);

        if (Auth::check() && (($order->user->id == auth()->user()->id)) || $order->user->admin)
        {
            if ($order->receipt)
            {
//                return Storage::disk('receipts')->delete($order->receipt);
                $order->receipt = null;
                $order->save();
            }

            return false;
        }
        return false;
    }
}
