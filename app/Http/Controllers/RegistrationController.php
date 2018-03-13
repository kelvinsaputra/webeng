<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function index(){
		$errors = ["AHAHAHAHAHA", "qweqwe"];
    	return view('welcome', compact('errors'));
	}
}
