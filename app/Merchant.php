<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merchant extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token', 'otp'
    ];
    use HasApiTokens, Notifiable;
}
