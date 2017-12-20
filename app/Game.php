<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //


    /**
     * Get the user that owns the game.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
