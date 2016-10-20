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

Route::get( 'bpage/','BusinessPageController@index');

Route::get('login/','AuthController@showLogin');
Route::get('register/','AuthController@showRegister');

Route::group(['middleware' => 'userAuth'], function () {
    Route::get('userProfile','AuthController@userProfile');
    Route::get('logout','AuthController@logout');
});
