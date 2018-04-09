<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Pic;
use App\Ktp;
use App\Kk;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers = Customer::all();
    	$pics = Pic::all();
      // $kks = Kk::all();

		return view('welcome', compact('customers', 'pics'));
    }

  //   public function show(Customer $customer_number)
  //   {
  //   	return $customer_number;
		 //return view('welcome', compact('customers'));
  //   }

    public function store()
    {
    	// $random = rand();

    	// $customers = Customer::all('account_number');

    	// $found = true;

    	// while($found){
    	// 	$found = false; //awal anggap ga ada duplicate
    	// 	foreach ($customers as $value) { //loop setiap isi db
    	// 		if($value->account_number == $random){
    	// 			$random = rand(); //random ulang
    	// 			$found = true; //found masih true
    	// 			break; //kalo ketemu yg sama keluar langsung
    	// 		}
    	// 	}
    	// }

    	

    	Customer::create([
    		'account_number' => request('account_number'),

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

    // 	$validatedData = $request->validate([
    // 		'first_name' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
    // 		'last_name' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
		  // ]);

    	Pic::create([
    		'first_name' => request('first_name'),

    		'last_name' => request('last_name'),

    		'gender' => request('gender'),

    		'facebook_acc_id' => request('facebook_acc_id'),
 
    		'cust_id_type' => request('cust_id_type'),

    		'contact_number' => request('contact_number'),

    		'cust_id' => request('cust_id'),

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

    public function search(Request $request)
    {
    	//$customers = Customer::all()->where('account_number', $request->search);
      $customer_ids = Pic::all()->where('cust_id', $request->search);
      $names = Pic::all()->where('first_name', $request->search);
      $ktps = Ktp::all()->where('cust_id', $request->search);

      $number = 0;
      if(count($names)){
        $number = $names[0]->cust_id;
        $ktps = Ktp::all()->where('cust_id', $number);
      }else{
        $names = Pic::all()->where('last_name', $request->search);
      }

      if(!count($ktps)){
        $ktps = Ktp::all()->where('first_name', $request->search);        
      }

      if(!count($ktps)){
        $ktps = Ktp::all()->where('last_name', $request->search);        
      }
      
      return view('search', compact('customer_ids', 'names', 'ktps'));
    }

    public function edit($value){
      $pics = Pic::all()->where('pic_id', $value);
      $customers = Customer::all()->where('customer_id', $value);
      $array = [];

      $temp = $value;

      foreach ($customers as $value) {
        $array['account_number'] = $value->account_number;
        $array['cust_username'] = $value->cust_username;
        $array['cust_segment'] = $value->cust_segment;
        $array['cust_category'] = $value->cust_category; 
        $array['dukcapil_status'] = $value->dukcapil_status; 
        $array['longitude'] = $value->longitude; 
        $array['latitude'] = $value->latitude; 
        $array['residence_type'] = $value->residence_type; 
        $array['npwp'] = $value->npwp; 
        $array['birth_date'] = $value->birth_date; 
        $array['is_converted_from_lead'] = $value->is_converted_from_lead;
        $array['cust_status'] = $value->cust_status; 
        $array['occupation'] = $value->occupation; 
        $array['primary_mobile'] = $value->primary_mobile; 
        $array['bss_status'] = $value->bss_status; 
        $array['corp_tax_id'] = $value->corp_tax_id; 
        $array['shared_balance_group'] = $value->shared_balance_group; 
        $array['updated_at'] = $value->updated_at;
        $array['created_at'] = $value->created_at;
      }

      foreach ($pics as $value) {
        $array['pic_id'] = $value->pic_id;
        $array['first_name'] = $value->first_name;
        $array['last_name'] = $value->last_name;
        $array['gender'] = $value->gender;
        $array['facebook_acc_id'] = $value->facebook_acc_id;
        $array['cust_id_type'] = $value->cust_id_type;
        $array['contact_number'] = $value->contact_number;
        $array['cust_id'] = $value->cust_id;
        $array['mother_name'] = $value->mother_name;
        $array['primary_email'] = $value->primary_email;
        $array['pref_language'] = $value->pref_language;
        $array['kk_number'] = $value->kk_number;
        $array['home_phone'] = $value->home_phone;
        $array['home_status'] = $value->home_status;
        $array['office_phone'] = $value->office_phone;
        $array['marital_status'] = $value->marital_status;
        $array['fax_number'] = $value->fax_number;
      }

      return view('update', compact('array', 'temp'));
    }

    public function update(Request $request){
      $customer = Customer::all()->where('customer_id', $request->id)->first();
      $customer->account_number = $request->account_number;
      $customer->cust_username = $request->cust_username;
      $customer->cust_segment = $request->cust_segment;
      $customer->cust_category = $request->cust_category;
      $customer->dukcapil_status = $request->dukcapil_status;
      $customer->longitude = $request->longitude;
      $customer->latitude = $request->latitude;
      $customer->residence_type = $request->residence_type;
      $customer->npwp = $request->npwp;
      $customer->birth_date = $request->birth_date;
      $customer->is_converted_from_lead = $request->is_converted_from_lead;
      $customer->cust_status = $request->cust_status;
      $customer->occupation = $request->occupation;
      $customer->primary_mobile = $request->primary_mobile;
      $customer->bss_status = $request->bss_status;
      $customer->corp_tax_id = $request->corp_tax_id;
      $customer->shared_balance_group = $request->shared_balance_group;

      $customer->save();

      $pic = Pic::all()->where('pic_id', $request->id)->first();
      $pic->first_name = $request->first_name;
      $pic->last_name = $request->last_name;
      $pic->gender = $request->gender;
      $pic->facebook_acc_id = $request->facebook_acc_id;
      $pic->cust_id_type = $request->cust_id_type;
      $pic->contact_number = $request->contact_number;
      $pic->cust_id = $request->cust_id;
      $pic->mother_name = $request->mother_name;
      $pic->primary_email = $request->primary_email;
      $pic->pref_language = $request->pref_language;
      $pic->kk_number = $request->kk_number;
      $pic->home_phone = $request->home_phone;
      $pic->home_status = $request->home_status;
      $pic->office_phone = $request->office_phone;
      $pic->marital_status = $request->marital_status;
      $pic->fax_number = $request->fax_number;

      $pic->save();

      return redirect()->action('CustomerController@index');

    }

}
