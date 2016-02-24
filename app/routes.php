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

Route::get('/', function()
{
	return View::make('login/login');
});

Route::post('/login','AuthController@login');

// Route::get('/login', function(){
	// return View::make('login');
// });

// Route::get('/', 'Homecontroller@showWelcome');

Route::post('/register', 'Authcontroller@register');

Route::get('/register', function(){
	return View::make('login/register');
});

Route::resource('books','BookController');

Route::get('/login', 'AuthController@showLogin');

Route::post('/login', 'AuthController@login');

Route::get('/logout','AuthController@logout');
?>
