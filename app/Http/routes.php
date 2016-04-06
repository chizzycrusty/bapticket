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

    Route::get('/', function() {
    	return view('welcome');
	});

    Route::get('/registerchoice', function() {
        return view('auth.registerchoice');
    });

    // Admin Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Admin Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');
    Route::get('/admin', 'AdminController@index');

    // Orga Login Routes...
    Route::get('/orga/login','OrgaAuth\AuthController@showLoginForm');
    Route::post('/orga/login','OrgaAuth\AuthController@login');
    Route::get('/orga/logout','OrgaAuth\AuthController@logout');

    // Orga Registration Routes...
    Route::get('orga/register', 'OrgaAuth\AuthController@showRegistrationForm');
    Route::post('orga/register', 'OrgaAuth\AuthController@register');
    Route::get('/orga', 'OrgaController@index');
    
});
