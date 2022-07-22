<?php

namespace App\Models;

use App\Http\Traits\Statistics;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes, Statistics;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'status',
        'priced_at'
    ];

    /**
     * Belongs to products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot(['quantity', 'price']);
    }

    /**
     * Belongs to user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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


    public function getTotalPriceAttribute()
    {
        $total_price = 0;
        foreach ($this->products as $product) {
            if ($product->pivot->price && $product->pivot->quantity)
                $total_price += $product->pivot->price * $product->pivot->quantity;
            else {
                $total_price = null;
                break;
            }
        }

        return $total_price;
    }


    /**
     * get time left to pay the order
     *
     * @return Carbon|false
     */
    public function getTimeToPayAttribute()
    {
        return $this->priced_at->addMinutes(10)->diffAsCarbonInterval(now()) ?? false;
    }


    /**
     * change status to "priced"
     *
     * @return void
     */
    public function priced()
    {
        $this->status = 'priced';
        $this->update();
    }


    /**
     * change status to "paid"
     *
     * @return void
     */
    public function paid()
    {
        $this->status = 'paid';
        $this->update();
    }


    /**
     * change status to "approve"
     *
     * @return void
     */
    public function approve()
    {
        $this->status = 'approved';
        $this->update();
    }


    /**
     * change status to "cancel"
     *
     * @return void
     */
    public function cancel()
    {
        $this->status = 'canceled';
        $this->update();
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
            'status' => $rules['status'] ?? '*'
        ];
    }
}
