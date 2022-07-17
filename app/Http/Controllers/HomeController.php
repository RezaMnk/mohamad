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
    public function shop(Request $request)
    {
        $products = Product::query();

        $products = $this->filterShop($request);

        $products = $products->latest()->paginate(12);

        $attributes = Attribute::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();


        return view('site.shop', compact('products', 'attributes', 'categories'));
    }

    private function filterShop(Request $request)
    {
        $products = Product::query();

        if ($request->has('order'))
        {
            switch ($request->order)
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
            };
        }

        if ($request->has('attribute'))
        {
            foreach ($request->attribute as $attribute)
            {
                $products->orWhereRelation('attributes','id', $attribute);
            }
        }

        if ($request->has('weight'))
        {
            foreach ($request->weight as $weight)
            {
                $weight_l = explode('-', $weight);
                if (count($weight_l) == 2)
                    $products->orWhereBetween('weight', [$weight_l[0], $weight_l[1]]);

                elseif (str_contains($weight, '+'))
                {
                    $weight = substr($weight, 1);
                    $products->orWhere('weight', '>', $weight);
                }

            }
        }

        if ($request->has('category'))
        {
            $products->orWhereRelation('categories','id', $request->category);
        }

        if ($request->has('search') && !is_null($request->search))
        {
            $products->where('name', 'LIKE', '%'. $request->search .'%')
                ->orWhere('description', 'LIKE', '%'. $request->search .'%')
                ->orWhere('short_description', 'LIKE', '%'. $request->search .'%')
                ->orWhere('id', 'LIKE', '%'. $request->search .'%');
        }

        return $products;
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


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function wishlist()
    {
        return view('site.wishlist');
    }


    /**
     * show the main page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cart()
    {
        return view('site.cart');
    }

}
