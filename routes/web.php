<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CustomerController@index');
Route::post('/posts', 'CustomerController@store');
Route::post('/search', 'CustomerController@search');
//Route::post('/search', 'CustomerController@search');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('test');
})->name('post');

Route::get('/edit/{value}', 'CustomerController@edit');