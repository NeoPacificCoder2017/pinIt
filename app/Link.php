<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Link extends Model
{
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'url', 'title', 'user_id', 'picture', 'category_id'
    ];

   /**
    * Get the users for the link.
    */
    public function users() 
    {
        return $this->hasMany('App\User');
    }

      /**
    * Get the category for the link.
    */
    public function category() 
    {
        return $this->belongsTo('App\Category');
    }
}
