<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    public function users() {
    /**
     * Get the users for the user type.
     */
        return $this->hasMany('App\User');
    }
}
