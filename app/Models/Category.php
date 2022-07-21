<?php

namespace App\Models;

use App\Http\Traits\Statistics;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Statistics;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'parent_id'
    ];

    // use children relationship


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function shop_route()
    {
        if (isset($this->id))
            return route('home.shop', ['filter[category]' => $this->id]);
        else
            return false;
    }
}
