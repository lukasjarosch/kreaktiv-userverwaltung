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
Route::get('/', array(
	'before'	=> 'auth',
	'uses'		=> 'HomeController@getIndex'
));

Route::get('/login', array(
	'uses'		=> 'LoginController@getLogin'
));

Route::post('/login', array(
	'before'	=> 'crsf',
	'uses'		=> 'LoginController@postLogin'
));


// Todo: incomplete, just for showing off
Route::get('/register', function(){
	echo "Registrieren per se wird nicht möglich sein. Aber hier kann man vllt. direkt einen Account anfordern";
});

Route::get('/forgot-password', function(){
	echo "Passwort vergessen";
});
