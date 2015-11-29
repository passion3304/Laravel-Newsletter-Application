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
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {

	Route::get('logout', 'Auth\AuthController@getLogout');

	Route::get('logout', 'Auth\AuthController@getLogout');

	Route::get('home', function () {
	    return Redirect::to("dashboard");
	});

	Route::get('dashboard', 'UsersController@getDashboard');

	Route::get("test", 'Tests\TestController@getIndex');
	Route::get("subscribers", 'SubscribersController@getIndex');
	Route::post("subscribers", 'SubscribersController@postNew');

	Route::get("groups", 'GroupsController@getIndex');
	Route::post("groups", 'GroupsController@postNew');

	Route::get("tests/email", 'Tests\TestController@getSendEmail');
	//Route::post("groups", 'GroupsController@postNew');

	Route::get("templates", 'TemplatesController@getIndex');
	Route::post("templates", 'TemplatesController@postSaveUserTemplate');

	Route::get('templates/epi', 'TemplatesController@getEPITemplate');
	Route::post('templates/epi', 'TemplatesController@postSaveEPITemplate');

	Route::get("subscribers/upload", 'SubscribersController@getUploadFromExcel');
	Route::post("subscribers/upload", 'SubscribersController@postUploadFromExcel');

	Route::get("newsletters", 'NewslettersController@getIndex');
	Route::post("newsletters", 'NewslettersController@postSend');


});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

Route::get('auth/login', function () {
	 return Redirect::to("login");
});

Route::get("newsletters/process", "NewslettersController@getProcess");


