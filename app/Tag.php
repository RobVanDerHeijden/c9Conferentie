<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    
    public function slottag_tag()
    {
        return $this->belongsTo('App\SlotTag');
    }
}
