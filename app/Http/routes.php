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

Route::get(	'/',								'BaseController@index');

Route::get(	'/sign_in/',						'BaseController@sign_in');
Route::post('/sign_in/',						'BaseController@sign_in');

Route::get(	'/logout/',							'BaseController@logout');

Route::get(	'/form/',							'BaseController@home');
Route::post('/form/',							'BaseController@form');

Route::get(	'/courses/',						'BaseController@conferenceAll');
Route::get(	'/courses/{project_id}/',			'BaseController@conference');
Route::get(	'/courses/accept/{project_id}/',	'BaseController@conferenceLink');