<?php

namespace App\Helpers\Cart;

use App\Models\Product;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

class CartService extends Facade
{
    protected $cart;

    function __construct()
    {
        $this->cart = session()->get('cart')  ?? collect([]);
    }

    /**
     * put product data to cart session
     *
     * @param Product $product
     * @param int $count
     * @return $this
     */
    public function put(Product $product, int $count)
    {
        $value = [
            'id' => Str::random(10),
            'product' => $product->id,
            'count' => $count,
        ];

        $this->cart->put($value['id'], $value);
        session()->put('cart', $this->cart);

        return $this;
    }


    /**
     * check if product is added to cart already
     *
     * @param Product $product
     * @return bool
     */
    public function has(Product $product)
    {
        return ! is_null($this->cart->firstWhere('product', $product->id));
    }


    /**
     * get specific product in cart
     *
     * @param Product $product
     * @return mixed|null
     */
    public function get(Product $product)
    {
        return $this->make($this->cart->firstWhere('product', $product->id));
    }


    /**
     * get all the products in cart
     *
     * @return mixed|null
     */
    public function all()
    {
        return $this->make($this->cart->all());
    }


    /**
     * replace product id with its collection
     *
     * @param $item
     * @param bool $collection
     * @return mixed
     */
    private function make($item)
    {
        if (isset($item['id'])) {
            $item['product'] = Product::find($item['product']);
            return collect($item);
        }

        foreach ($item as $k => $value)
        {
            $item[$k] = $this->make($value, false);
        }

        return collect($item);
    }


    public function clear()
    {
        session()->forget('cart');
    }
}
