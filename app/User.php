<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'last_name', 'first_name', 'email', 'password',
=======
        'lastname', 'firsname', 'user_type_id', 'email', 'password'
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the user that owns the user type.
     */
    public function userType()
    {
        return $this->belongsTo('App\UserType');
    }

    /**
     * Get the categories for the user.
     */
    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    /**
     * Get the links for the user.
     */
    public function link()
    {
        return $this->belongsTo('App\Link');
    }
}
