<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CustomerController@index');
Route::post('/posts', 'CustomerController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
