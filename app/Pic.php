<?php

namespace App;

class Pic extends Model
{

	public $timestamps = false;

	public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}