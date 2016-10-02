<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', 'WelcomeController@index');



Route::get('insert','WelcomeController@Insert');

Route::post('insert_data','WelcomeController@InsertData');






Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



Route::get('/', function () {
    return view('sample');
});


Route::get('customerOrders', 'CustomerOrders@index');
Route::get('updateOrderStatus{id}', 'CustomerOrders@update');
Route::post('searchOrderStatus', 'CustomerOrders@search');