<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlotTag extends Model
{
    public $timestamps = false;
    
    public function slot_slottag()
    {
        return $this->hasMany('App\Slot');
    }
    
    public function tag_slottag()
    {
        return $this->hasMany('App\Tag');
    }
}
