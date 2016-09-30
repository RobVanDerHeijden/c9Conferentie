<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function reserveren_user()
    {
        return $this->hasMany('App\Reservering');
    }
}
