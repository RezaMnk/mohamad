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
    public function contact_us()
    {
        return view('site.contact-us');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_us()
    {
        return view('site.about-us');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function suggestions()
    {
        return view('site.suggestions');
    }
}
