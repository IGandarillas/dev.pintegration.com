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


Route::get('/', ['as' => 'login', 'uses'=>'Auth\AuthController@getLogin' ] );
Route::get('/home', 'HomeController@index');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/registro', array('as' => 'signup','uses' => 'Auth\AuthController@getRegister'));
Route::post('/registro', array('as' => 'signup', 'uses' => 'Auth\AuthController@postRegister'));

Route::get('/auth/login', array('as' => 'entrar','uses' => 'Auth\AuthController@getLogin'));
Route::post('/auth/login', array('as' => 'entrar', 'uses' => 'Auth\AuthController@postLogin'));

Route::get('/salir', array('as' => 'salir','uses' =>'Auth\AuthController@getLogout'));

Route::resource('home','HomeController');

Route::post('/pipedrive/receipt', array('as' => 'pipedrive/receipt', 'uses' => 'PipedriveReceipt@store'));
Route::get('/pipedrive/receipt', array('as' => 'pipedrive/receipt', 'uses' => 'PipedriveReceipt@index'));
//Route::post('/home', 'HomeController@postHome');
/*
Route::get('password/email', 'PasswordController@getEmail');
Route::post('password/email', 'PasswordController@postEmail');
Route::get('password/reset/{token}', 'PasswordController@getReset');
Route::post('password/reset', 'PasswordController@postReset');
*/