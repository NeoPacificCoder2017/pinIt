<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [ 'user_id', 'title'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function category() {
        /**
         * Get the users for the category.
         */
            return $this->hasMany('App\Link');
        }
}
