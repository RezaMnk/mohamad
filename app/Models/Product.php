<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

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
        return $this->belongsToMany(Orders::class)
            ->withPivot(['amount', 'price']);
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
     * count products by column name
     *
     * @param $type
     * @param $bool
     * @return false|int
     */
    public static function count($type, $bool = true)
    {
        $products = self::query();
        switch ($type) {
            case('all'):
                return count($products->get());

            default:
                if (!in_array($type, ['status']))
                    return false;
                return count($products->where($type, $bool)->get());
        }
    }
}
