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

//---------------- Routes for Authentification -----------------//
Auth::routes();
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');

//--------------------  home  ---------------------------//
Route::get('/home', 'HomeController@index')->name('home');

//--------------------  users_entity  ---------------------------//
Route::get('/users', 'UserController@apiIndex')->name('user.apiIndex');
Route::get('/users/new', 'UserController@new')->name('user.new');
Route::post('/users', 'UserController@apiStore')->name('user.apiStore');
Route::get('/users/{userId}/show', 'UserController@getShowView')->name('user.getShowView');
Route::get('/users/{userId}', 'UserController@apiShow')->name('user.apiShow');
Route::get('/users/{userId}/edit', 'UserController@edit')->name('user.edit');
Route::put('/users/{user}', 'UserController@apiUpdate')->name('user.apiUpdate');
Route::delete('/users/{user}', 'UserController@apiDestroy')->name('user.apiDestroy');

//--------------------  user_types_entity  ---------------------------//
Route::get('/userTypes/index', 'UserTypeController@getIndexView')->name('userType.getIndexView');        
Route::get('/userTypes', 'UserTypeController@apiIndex')->name('userType.apiIndex');        
Route::get('/userTypes/new', 'UserTypeController@new')->name('userType.new');        
Route::post('/userTypes', 'UserTypeController@apiStore')->name('userType.apiStore');          
Route::get('/userTypes/{userTypeId}/edit', 'UserTypeController@edit')->name('userType.edit');        
Route::put('/userTypes/{userType}', 'UserTypeController@apiUpdate')->name('userType.apiUpdate');        
Route::delete('/userTypes/{userType}', 'UserTypeController@apiDestroy')->name('userType.apiDestroy'); 
