<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before'=>'auth'), function()
{
	Route::get('admin', 'AdminController@getIndex');

	Route::get('logout', 'HomeController@logout');

	Route::resource('posts', 'PostsController');

	Route::get('posts', 'PostsController@index');

	Route::post('posts', 'PostsController@create');
});

Route::group(array('before'=>'guest'), function()
{
	Route::get('login', 'HomeController@getLogin');

	Route::post('login', 'HomeController@postLogin');
});

Route::get('/', function()
{
    return Redirect::to('login');
});


// Route::get('register', 'HomeController@getRegister');

// Route::post('register', 'HomeController@postRegister');


