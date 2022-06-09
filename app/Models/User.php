<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
     * Relation connection with Two Factor Ath
     *
     * @return HasMany
     */
    public function TwoFA()
    {
        return $this->hasMany(TwoFA::class);
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

}
