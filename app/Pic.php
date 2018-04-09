<?php

namespace App;

class Pic extends Model
{
	protected $primaryKey = 'pic_id';
	public $timestamps = false;

	public function ktp()
    {
    	//return $this->belongsTo('App\Customer');
    	return $this->hasOne('App\Ktp');
    }
}