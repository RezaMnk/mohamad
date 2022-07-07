<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

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
        return $this->hasMany(Attribute::class, 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }


    /**
     * count attributes by column name
     *
     * @param $type
     * @param $bool
     * @return false|int
     */
    public static function count($type, $bool = true)
    {
        $attributes = self::query();
        switch ($type) {
            case('all'):
                return count($attributes->get());

            default:
                return false;
        }
    }
}
