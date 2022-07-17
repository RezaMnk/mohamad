<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductCard extends Component
{
    private string $type;
    private int $count;
    public $products;
    public $slider;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'new', $count = 3, $slider = false, $id = 0)
    {
        $this->type = $type;
        $this->count = $count;
        $this->slider = boolval($slider);
        $this->id = $id;

        $products = Product::query();

        if ($id) {
            return $this->products = $products->whereId($id)->get();
        }

        if ($this->type == 'new')
            $products->latest();

        elseif ($this->type == 'popular')
            $products->orderBy('view_count', 'desc');

        $this->products = $products->take($this->count)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
