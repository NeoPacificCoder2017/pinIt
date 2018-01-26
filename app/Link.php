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
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];

   /**
    * Get the users for the link.
    */
    public function users() 
    {
        return $this->hasMany('App\User');
    }
}
