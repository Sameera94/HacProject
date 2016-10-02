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


Route::get('addMenuPage','WelcomeController@addMenuForm');


//registed route for admin to submit dinning menu add from
Route::post('diningAddMenuSubmit','WelcomeController@diningAddMenu');

Route::get('addMenuPage','WelcomeController@addMenuForm');

//registed route for admin to view dinning menu
Route::get('viewDiningMenu','menuController@viewDiningMenu');

//registed route for admin to edit  dinning menu
Route::get('diningMenuEdit/{id}','menuController@diningMenuEdit');


Route::post('updateDiningItem/{id}','menuController@diningAddMenu');


//diningMenuEdit/'.$foodItem->id

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



Route::get('/', function () {
    return view('sample');
});