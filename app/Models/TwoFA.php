<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwoFA extends Model
{
    use HasFactory;

    protected $table = '2fa_codes';

    protected $fillable = ['user_id', 'code', 'expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Verify the code for the user
     *
     * @param $query
     * @param $code
     * @param $user
     * @return bool
     */
    public function scopeVerifyCode($query, $code, $user)
    {
        $find = $this->where('user_id', $user->id)
            ->whereCode($code)
            ->where('expired_at', '>=', now())
            ->first();

        return !! $find;
    }
}
