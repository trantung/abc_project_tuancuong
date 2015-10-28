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
	return View::make('hello');
});
Route::get('users','UsersController@index');
// Route::get('login','UsersController@login');
Route::post('login', array('uses' => 'UsersController@postLogin', 'as' => 'post.login'));
Route::GET('login', array('uses' => 'UsersController@login', 'as' => 'login'));

Route::get('logout', array('uses' => 'UsersController@logout', 'as' => 'logout'));


Route::get('edit/{id}', array('uses' => 'UsersController@edit', 'as' => 'edit'));
Route::post('edit/{id}', array('uses' => 'UsersController@update', 'as' => 'update'));

Route::get('create', array('uses' => 'UsersController@create', 'as' => 'create'));
Route::post('postcreate', array('uses' => 'UsersController@postcreate', 'as' => 'postcreate'));

Route::get('remove/{id}', array('uses' => 'UsersController@remove', 'as' => 'remove'));
Route::resource('cuong', 'CuongController');