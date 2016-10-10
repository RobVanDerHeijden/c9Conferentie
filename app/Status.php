<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    
    public function slot_status()
    {
        return $this->belongsTo('App\Slot');
    }
}
