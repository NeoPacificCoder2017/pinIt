<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

                    // Routes for user_types_entity
Route::get('/userTypes', 'UserController@index');        
Route::get('/userTypes/new', 'UserController@new')->name('userType.new');        
Route::post('/userTypes', 'UserController@store');        
Route::get('/userTypes/{userTypeId}', 'UserController@show');        
Route::get('/userTypes/{userTypeId}/edit', 'UserController@edit');        
Route::put('/userTypes/{userTypeId}', 'UserController@update')->name('userType.update');        
Route::delete('/userTypes/{userTypeId}', 'UserController@destroy');        