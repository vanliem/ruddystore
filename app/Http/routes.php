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
Route::group(['domain' => env('APP_DOMAIN', 'ruddystore.app')], function () {
	Route::group(['namespace' => 'Front'], function () {
		Route::get('/', 'IndexController@index');
	});
	/*Route::get('/', function () {
	    return view('welcome');
	});*/
	
});

