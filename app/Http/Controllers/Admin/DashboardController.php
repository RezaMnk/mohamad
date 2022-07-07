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
            'users' => User::statistics(now()->subWeek(), now()),
            'orders' => Order::statistics(now()->subWeek(), now()),
            'orders' => Order::statistics(now()->subWeek(), now()),
        ];
        return view('admin.index', compact('statistics'));
    }
}
