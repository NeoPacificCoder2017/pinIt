<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['title', 'date_end'];
    
   /**
    * Get the links for the board.
    */
    public function links() 
    {
        return $this->hasMany('App\Link');
    }

    /**
     * Get the users for the user type.
     */
    public function users() {
       
        return $this->hasMany('App\User');
    }
}
