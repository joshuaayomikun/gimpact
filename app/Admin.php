<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [

        'firstname', 'lastname', 'othername', 'email', 'phonenumber',
        'status', 'address', 'gender', 'last_login', 'role_id',

    ];

    protected $hidden = [

        'password', 

    ];
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }
}
