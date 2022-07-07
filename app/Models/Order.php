<?php

namespace App\Models;

use App\Http\Traits\Statistics;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes, Statistics;

    public $Model = self::class;

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
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot(['amount', 'price']);
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
            if ($product->pivot->price && $product->pivot->amount)
                $total_price += $product->pivot->price * $product->pivot->amount;
            else {
                $total_price = null;
                break;
            }
        }

        return $total_price;
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

    public static function count($type, $bool = true)
    {
        $orders = self::query();
        switch ($type) {
            case('all'):
                return count($orders->get());
            default:
                if (!in_array($type, ['unapproved', 'paid', 'priced', 'approved', 'canceled']))
                    return false;

                if ($bool)
                    return count($orders->whereStatus($type)->get());
                return count($orders->whereNot('status', $type)->get());

        }
    }
}
