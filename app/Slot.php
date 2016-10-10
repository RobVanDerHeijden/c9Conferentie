<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function zaal_slot()
    {
        return $this->hasMany('App\Zaal');
    }
    
    public function status_slot()
    {
        return $this->hasMany('App\Status');
    }
    
    public function slottag_slot()
    {
        return $this->belongsTo('App\SlotTag');
    }
}
