<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProductGallery extends Model
{
    use HasFactory;

    protected $table = 'product_gallery';

    protected $fillable = ['product_id', 'image', 'main'];

    /**
     * Write code on Method
     *
     * @return response()
     */
//    public static function boot() {
//
//        parent::boot();
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::created(function($item) {
//            if (Storage::disk('products')->exists($item->image))
//            $image = Image::make('storage/products' . $item->image);
//            $thumb = $image->resize(300, null, function ($constraint) {
//                $constraint->aspectRatio();
//            });
//            Storage::disk('products')->put('thumbs'. $item->image, $thumb->encode('png', 75));
//        });
//    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }


    /**
     * Get image url for product
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/products') . $this->attributes['image'];
    }




    /**
     * Get image url for product
     *
     * @return \Intervention\Image\Image
     */
    public function getThumbnailAttribute()
    {
        return asset('storage/products/thumbs') . $this->attributes['image'];
    }


}
