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

    protected $fillable = ['title'];
   
    

    public function category() {

        /**
        * Get the users for the category.
        */
        return $this->hasMany('App\Link');
    }
}
