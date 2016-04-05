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

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/registerchoice', function () {
        return view('auth.registerchoice');
    });

    Route::get('/', function() {
    	return view('welcome');
	});

    Route::get('/registerorga', function () {
        return view('auth.registerorga');
    });
});
