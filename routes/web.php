<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get( '/','LandingPageController@index');
Route::get( 'about-goonpages/','LandingPageController@about');

Route::get( 'Searching/','SearchController@index');

Route::get('user/', 'UserController@show');
Route::get('user/add', 'UserController@add');

Route::get( 'bpage/','BusinessPageController@index');
