<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_id_friend',
    ];

    /**
     * Get the user.
     */
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
