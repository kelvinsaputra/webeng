<?php

namespace App;

class Customer extends Model
{
	protected $primaryKey = 'customer_id';

    public static function searchCustomer($value)
    {

    	return static::where('account_number', $value)->get();

    }

    public function pic()
    {
    	//return $this->hasMany('App\Pic');
    }
}
