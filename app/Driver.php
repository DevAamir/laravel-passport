<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Driver extends Model
{
    use  HasApiTokens;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function findForPassport($user_cred = null)
    {
        echo "Driver ch aa gaya";die();
    }
}
