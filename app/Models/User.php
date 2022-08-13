<?php

namespace App\Models;

use App\Http\Traits\Statistics;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Statistics;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'password',
        'address',
        'vip',
        'zarin',
        'verified',
        'admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relation connection with Two Factor Auth
     *
     * @return HasMany
     */
    public function twoFA()
    {
        return $this->hasMany(TwoFA::class);
    }

    /**
     * Relation connection with wishlist
     *
     * @return HasMany
     */
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    /**
     * Relation connection with Orders
     *
     * @return HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Verify the user authentication
     *
     * @return void
     */
    public function verify()
    {
        if (! $this->verified) {

            $this->verified = true;
            $this->save();
        }
    }

    /**
     * Check if user is admin
     *
     * @return bool
     */
    public function is_admin()
    {
        return $this->admin;
    }

    /**
     * Set hashed password attribute for user
     *
     * @param $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
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
     * declare columns to use in statistics data
     *
     * @param $rules
     * @return array
     */
    protected function statistics_columns($rules)
    {
        return [
            'vip' => $rules['vip'] ?? '*',
            'zarin' => $rules['zarin'] ?? '*',
        ];
    }

    /**
     * declare columns to except for statistics
     *
     * @param $rules
     * @return array
     */
    protected function statistics_exceptions($rules)
    {
        return [
            'admin' => false,
        ];
    }


    /**
     * declare rules for calculation method
     *
     * @param $rules
     * @return array
     */
    protected function calc_static_rules()
    {
        return [
            'admin' => false,
        ];
    }
}
