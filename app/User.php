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
        'last_name', 'first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * Generate the token for the API authentication
     */
    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }

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
    public function links()
    {
        return $this->hasMany('App\Link');
    }
}
