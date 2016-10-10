<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaal extends Model
{
    public $timestamps = false;
    public function slot_zaal()
    {
        return $this->belongsTo('App\Slot');
    }
}
