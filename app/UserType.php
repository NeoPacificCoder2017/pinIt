<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public function users() {
    /**
     * Get the users for the user type.
     */
        return $this->hasMany('App\User');
    }
}
