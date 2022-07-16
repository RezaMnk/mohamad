<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Category;
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
        $products = Product::query();


        if ($filter = request('filter')) {
            $filter_is = function ($is) use ($filter) { return in_array($is, array_keys($filter)); };

            if ($filter_is('order'))
            {
                switch ($filter['order'])
                {
                    case 'new':
                        $products->latest();
                        break;

                    case 'popular':
                        $products->orderBy('view_count', 'desc');
                        break;

                    case 'sold':
                        $products->withCount('orders')->orderBy('orders_count', 'desc');
                        break;
                }
            }

            elseif ($filter_is('attribute'))
            {
                $products->whereRelation('attributes','id', request('filter')['attribute']);
            }

            elseif ($filter_is('category'))
            {
                $products->whereRelation('categories','id', request('filter')['category']);
            }
        }

        $products = $products->latest()->paginate(12);

        $attributes = Attribute::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();

        return view('site.shop', compact('products', 'attributes', 'categories'));
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product(Product $product)
    {
        return view('site.product', compact('product'));
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


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('site.profile');
    }
}
