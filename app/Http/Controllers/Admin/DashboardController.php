<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statistics = (object) [
            'users' => User::statistics(now()->subWeek(), now(), ['vip' => true, 'zarin' => true]),
            'users_zarin_false' => User::statistics(false, now(), ['zarin' => false]),

            'orders' => Order::statistics(now()->subWeek(), now()),
            'orders_unapproved' => Order::statistics(false, now(), ['status' => 'unapproved']),
            'orders_paid' => Order::statistics(false, now(), ['status' => 'paid']),
            'orders_approved' => Order::statistics(false, now(), ['status' => 'approved']),

            'products' => Product::statistics(now()->subWeek(), now()),
        ];
        return view('admin.index', compact('statistics'));
    }
}
