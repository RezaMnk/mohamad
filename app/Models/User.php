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
     * count users by column name
     *
     * @param $type
     * @param $bool
     * @return false|int
     */
    public static function count($type, $bool = true)
    {
        $users = User::query();
        switch ($type) {
            case('all'):
                return count($users->get());

            default:
                if (!in_array($type, ['zarin', 'verified', 'vip']))
                    return false;
                return count($users->where($type, $bool)->get());
        }
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
            'vip' => true,
            'zarin' => true,
        ];
    }
}
