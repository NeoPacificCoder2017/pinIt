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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    // Route API Users
Route::get('/users', 'UserController@index');

    // Route API Links
Route::get('/links', 'LinkController@index');
Route::get('/link/{linkId}', 'LinkController@show');

    // Route API Categories
Route::get('/categories', 'CategoryController@index');
Route::get('/category/{categoryId}', 'CategoryController@show');

    //Route API UserTypes
Route::get('/userTypes', 'UserTypeController@index');
Route::get('/userType/{userTypeId}', 'UserTypeController@show');
