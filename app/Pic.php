<?php

namespace App;

class Pic extends Model
{

	public $timestamps = false;

	public function ktp()
    {
    	//return $this->belongsTo('App\Customer');
    	return $this->hasOne('App\Ktp');
    }
}