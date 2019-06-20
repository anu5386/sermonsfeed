<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');

});

Route::get('details', 'API\UserController@details');

//Route::group(['middleware' => 'auth:api'], function(){
//Route::post('sermons', 'API\UserController@sermons');
//Route::group(['middleware' => 'auth:api'], function(){
//Route::post('sermondetails', 'API\UserController@sermondetails');

//});

Route::get('/sermons/list','API\UserController@sermons');
