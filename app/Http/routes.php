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

// Authentification
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', [
		'middleware' => 'auth',
    	'uses' => 'IndexController@init'
	]);
});

// Authentication routes...
Route::get('admin/auth/login', 'Auth\AuthController@getLogin');
Route::post('admin/auth/login', 'Auth\AuthController@postLogin');
Route::get('admin/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('admin/auth/register', 'Auth\AuthController@getRegister');
Route::post('admin/auth/register', 'Auth\AuthController@postRegister');