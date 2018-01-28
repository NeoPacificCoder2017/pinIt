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
    protected $fillable = ['user_id', 'title'];
    
   /**
    * Get the links of the category.
    */
    public function links() 
    {
        return $this->hasMany('App\Link');
    }
}
