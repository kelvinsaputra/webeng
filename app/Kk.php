<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    public function ktps(){
    	return $this->hasMany('App\Ktp');
    }
}
