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

            //Routes for users_entity
Route::get('/users', 'UserController@index');
Route::get('/users/new', 'UserController@new')->name('user.new');
Route::post('/users', 'UserController@store');
Route::get('/users/{userId}', 'UserController@show');
Route::get('/users/{userId}/edit', 'UserController@edit');
Route::put('/users/{userId}', 'UserController@update')->name('user.update');
Route::delete('/users/{userId}', 'UserController@destroy');
