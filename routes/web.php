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
Route::get('/userTypes', 'UserTypeController@index');        
Route::get('/userTypes/new', 'UserTypeController@new')->name('userType.new');        
Route::post('/userTypes', 'UserTypeController@store');        
Route::get('/userTypes/{userTypeId}', 'UserTypeController@show');        
Route::get('/userTypes/{userTypeId}/edit', 'UserTypeController@edit');        
Route::put('/userTypes/{userTypeId}', 'UserTypeController@update')->name('userType.update');        
Route::delete('/userTypes/{userTypeId}', 'UserTypeController@destroy')->name('userType.destroy');        