<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    public function kk(){
    	return $this->belongsTo('App\Kk');
    }
}
