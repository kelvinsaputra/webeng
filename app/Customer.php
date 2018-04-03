<?php

namespace App;

class Customer extends Model
{

    public static function searchCustomer($value)
    {

    	return static::where('account_number', $value)->get();

    }

    public function pic()
    {
    	//return $this->hasMany('App\Pic');
    }
}
