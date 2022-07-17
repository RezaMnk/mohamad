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
    public static function boot() {

        parent::boot();

        /**
         * Write code on Method
         *
         */
        static::created(function($item) {
            if (!Storage::disk('products')->exists('/thumbs/'.$item->image)) {
                $image = Image::make(Storage::disk('products')->path($item->image));
                $thumb = $image->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $file_n = explode('.', $item->image);
                Storage::disk('products')->put('thumbs'. $item->image, $thumb->encode(end($file_n)), 75);
            }
        });
    }

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
     * @return string
     */
    public function getThumbnailAttribute()
    {
        $image_name = substr($this->attributes['image'], 1);
        if (!Storage::disk('products')->exists('/thumbs/'.$image_name)) {

            if (!Storage::disk('products')->exists($image_name))
                return asset('storage/default.png');

            $image = Image::make(Storage::disk('products')->path($image_name));
            $thumb = $image->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $file_n = explode('.', $image_name);
//            dd($file_n);
            Storage::disk('products')->put('thumbs/'. $image_name, $thumb->encode(end($file_n)), 75);
        }

        return asset('storage/products/thumbs') . $this->attributes['image'];
    }


}
