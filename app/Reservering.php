<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservering extends Model
{
    public function user_reservering()
    {
        return $this->belongsTo('App\User');
    }
}
