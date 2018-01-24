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
            // Routes for Authentification
Auth::routes();
        
Route::get('/home', 'HomeController@index')->name('home');

            //Routes for links_entity
Route::get('/links', 'LinkController@index')->name('links');
Route::get('/links/new', 'LinkController@new')->name('newLink');
Route::get('/links', 'LinkController@create')->name('createLink');
Route::get('/links/{linkId}', 'LinkController@show')->name('link');
Route::get('/links/{linkId}/edit', 'LinkController@edit')->name('editLink');
Route::get('/links/{linkId}', 'LinkController@update');
Route::get('/links/{linkId}', 'LinkController@destroy');