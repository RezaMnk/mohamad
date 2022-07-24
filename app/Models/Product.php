<?php

namespace App\Models;

use App\Http\Traits\Statistics;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, Statistics;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'weight',
        'description',
        'short_description',
        'status',
        'view_count'
    ];


    /**
     * Belongs to products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    /**
     * Belongs to products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    /**
     * Belongs to products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot(['quantity', 'price']);
    }


    /**
     * Belongs to products
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gallery()
    {
        return $this->hasMany(ProductGallery::class);
    }


    public function getGalleryAttribute()
    {
        return $this->gallery()->where('main', false)->get();
    }


    /**
     * use for (12 hours ago) or (12-12-2012)
     *
     * @return false|\Morilog\Jalali\Jalalian|string
     */
    public function created_at()
    {
        $time = $this->created_at;

        if (!$time) {
            return false;
        }

        if ($time > now()->subHours(24)) {
            return jdate($time)->ago();
        }

        return jdate($time)->format('%B %d، %Y');
    }


    /**
     * update gallery of product with image path [data]
     *
     * @param $galleries
     * @return void
     */
    public function update_gallery($galleries)
    {
        $keys = [];

        $galleries = array_unique($galleries);

        $galleries_arr = $this->gallery->where('main', '!=', true)->pluck('image')->toArray();

        $new_diff = array_diff($galleries, $galleries_arr);
        $old_diff = array_diff($galleries_arr, $galleries);

        if (count($new_diff) > count($old_diff))
        {
            foreach ($new_diff as $item)
                $this->gallery()->create(['image' => $item]);
        }
        if (count($new_diff) < count($old_diff))
        {
            foreach ($old_diff as $item)
                $this->gallery->where('image', $item)->first()->delete();
        }
        if ((count($new_diff) && count($old_diff)) && count($new_diff) == count($old_diff))
        {
            foreach ($this->gallery->where('main', false) as $key => $gallery)
                $gallery->update(['image' => $galleries[--$key]]);
        }
    }


    /**
     * get featuring image of product
     *
     * @return Model|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function featuring_image()
    {
        return $this->gallery()->where('main', true)->firstOrFail();
    }


    public function add_view_count()
    {

    }


    /**
     * declare columns to use in statistics data
     *
     * @param $rules
     * @return array
     */
    protected function statistics_columns($rules)
    {
        return [
            'status' => $rules['status'] ?? [true, false],
            'view_count' => ['>=', $rules['view_count'] ?? 0],
        ];
    }
}
