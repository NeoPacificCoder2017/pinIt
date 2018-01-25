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

//Routes for categories_entity
Route::get('/categories', 'categoryController@index');
Route::get('/categories/new', 'categoryController@new');
Route::post('/categories', 'categoryController@store');
Route::get('/categories/{categoryId}', 'categoryController@show');
Route::get('/categories/{categoryId}/edit', 'categoryController@edit');
Route::put('/categories/{categoryId}', 'categoryController@update');
Route::delete('/categories/{categoryId}', 'categoryController@destroy');