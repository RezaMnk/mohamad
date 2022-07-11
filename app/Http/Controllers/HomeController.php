<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shop()
    {
        return view('site.shop');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product(Product $product)
    {
        return view('site.product');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('site.contact');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('site.about');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feedback()
    {
        return view('site.feedback');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        return view('site.faq');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function guide()
    {
        return view('site.guide');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function policy()
    {
        return view('site.policy');
    }
}
