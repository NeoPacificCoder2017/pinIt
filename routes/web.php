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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes for links_entity
Route::get('/links', 'LinkController@index');
Route::get('/links/new', 'LinkController@new')->name('link.new');
Route::post('/links', 'LinkController@store');
Route::get('/links/{linkId}', 'LinkController@show');
Route::get('/links/{linkId}/edit', 'LinkController@edit')->name('link.edit');
Route::put('/links/{linkId}', 'LinkController@update')->name('link.update');
Route::delete('/links/{linkId}', 'LinkController@destroy')->name('link.destroy');
