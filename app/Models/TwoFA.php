<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwoFA extends Model
{
    use HasFactory;

    protected $table = '2fa_codes';

    public $timestamps = false;

    protected $fillable = ['user_id', 'code', 'expired_at'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function scopeVerifyCode($code, $user)
    {
        $find = $this->where('user_id', $user->id)
            ->whereCode($code)
            ->where('expired_at', '>=', now())
            ->first();

        return !! $find;
    }
}
