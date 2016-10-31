<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maaltijd extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'reservering', 'soort', 'vegetarisch', 'barcode'];
}
