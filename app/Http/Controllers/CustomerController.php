<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Pic;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	$pics = Pic::all();

		return view('welcome', compact('customers', 'pics'));
    }

  //   public function show(Customer $customer_number)
  //   {
  //   	return $customer_number;
		 //return view('welcome', compact('customers'));
  //   }

    public function store()
    {
    	$random = rand();

    	$customers = Customer::all('account_number');

    	$found = true;

    	while($found){
    		$found = false; //awal anggap ga ada duplicate
    		foreach ($customers as $value) { //loop setiap isi db
    			if($value->account_number == $random){
    				$random = rand(); //random ulang
    				$found = true; //found masih true
    				break; //kalo ketemu yg sama keluar langsung
    			}
    		}
    	}

    	

    	Customer::create([
    		'account_number' => $random,

    		'cust_username' => request('cust_username'),

    		'cust_segment' => request('cust_segment'),

    		'cust_category' => request('cust_category'),

    		'dukcapil_status' => request('dukcapil_status'),
 
    		'longitude' => request('longitude'),

    		'latitude' => request('latitude'),

    		'residence_type' => request('residence_type'),

    		'npwp' => request('npwp'),

    		'birth_date' => request('birth_date'),

    		'is_converted_from_lead' => request('is_converted_from_lead'),

    		'cust_status' => request('cust_status'),

    		'occupation' => request('occupation'),

    		'primary_mobile' => request('primary_mobile'),

    		'bss_status' => request('bss_status'),

    		'corp_tax_id' => request('corp_tax_id'),

    		'shared_balance_group' => request('shared_balance_group')

    	]);

    	Pic::create([
    		'first_name' => request('first_name'),

    		'last_name' => request('last_name'),

    		'gender' => request('gender'),

    		'facebook_acc_id' => request('facebook_acc_id'),
 
    		'cust_id_type' => request('cust_id_type'),

    		'contact_number' => request('contact_number'),

    		'cust_id' => $random,

    		'mother_name' => request('mother_name'),

    		'primary_email' => request('primary_email'),

    		'pref_language' => request('pref_language'),

    		'kk_number' => request('kk_number'),

    		'home_phone' => request('home_phone'),

    		'home_status' => request('home_status'),

    		'office_phone' => request('office_phone'),

    		'marital_status' => request('marital_status'),

    		'fax_number' => request('fax_number')

    	]);

  //   	$pic = new Pic;
  //   	$pic->first_name = $request->input('first_name');
  //   	$pic->last_name = $request->input('last_name');
  //   	$pic->gender = $request->input('gender');
  //   	$pic->facebook_acc_id = $request->input('facebook_acc_id');
  //   	$pic->cust_id = $request->input('cust_id');
  //   	$pic->cust_id_type = $request->input('cust_id_type');
  //   	$pic->contact_number = $request->input('contact_number');
  //   	$pic->mother_name = $request->input('mother_name');
  //   	$pic->primary_email = $request->input('primary_email');
  //   	$pic->pref_language = $request->input('pref_language');
  //   	$pic->kk_number = $request->input('kk_number');
  //   	$pic->home_phone = $request->input('home_phone');
  //   	$pic->home_status = $request->input('home_status');
  //   	$pic->office_phone = $request->input('office_phone');
  //   	$pic->marital_status = $request->input('marital_status');
  //   	$pic->fax_number = $request->input('fax_number');
  //   	$pic->first_name = $request->input('first_name');
		// $pic->save();

    	// $cust = new Customer(['cust_id' => $request->input('cust_id')]);
    	// dd($cust);
    	// $pic->cust()->save($cust);
    	//$pic->cust_id = $request->customer()->associate($cust);
    	
    	

    	return redirect()->action('CustomerController@index');
    }
}
