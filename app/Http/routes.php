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

Route::get('/', function () {
    return view('public.index');
});

Route::auth();

Route::group(['middleware' => 'auth'], function () {
  Route::get('dashboard', 'HomeController@index');
  Route::get('profile', 'HomeController@showProfile');
  Route::get('settings', 'SettingsController@index');
  Route::post('settings', 'SettingsController@update');
});
