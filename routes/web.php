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

            //Routes for Authentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home/users', 'UserController@index');

            //Routes for users_entity
Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/users/new', 'UserController@new')->name('user.new');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/users/{userId}', 'UserController@show')->name('user.show');
Route::get('/users/{userId}/edit', 'UserController@edit')->name('user.edit');
Route::put('/users/{userId}', 'UserController@update')->name('user.update');
Route::delete('/users/{userId}', 'UserController@destroy')->name('user.destroy');

                //Routes for links_entity
Route::get('/links', 'LinkController@index')->name('links.index');
Route::get('/links/new', 'LinkController@new')->name('links.new');
Route::post('/links', 'LinkController@store')->name('links.store');
Route::get('/links/{linkId}', 'LinkController@show')->name('links.show');
Route::get('/links/{linkId}/edit', 'LinkController@edit')->name('links.edit');
Route::put('/links/{linkId}', 'LinkController@update')->name('links.update');
Route::delete('/links/{linkId}', 'LinkController@destroy')->name('links.destroy');
Route::get('/links/{linkId}', 'LinkController@getLinksByCategory')->name('links.getLinksByCategory');

                    // Routes for user_types_entity
Route::get('/userTypes', 'UserTypeController@index')->name('userType.index');        
Route::get('/userTypes/new', 'UserTypeController@new')->name('userType.new');        
Route::post('/userTypes', 'UserTypeController@store')->name('userType.store');        
Route::get('/userTypes/{userTypeId}', 'UserTypeController@show')->name('userType.show');        
Route::get('/userTypes/{userTypeId}/edit', 'UserTypeController@edit')->name('userType.edit');        
Route::put('/userTypes/{userTypeId}', 'UserTypeController@update')->name('userType.update');        
Route::delete('/userTypes/{userTypeId}', 'UserTypeController@destroy')->name('userType.destroy'); 

            //Routes for categories_entity
Route::get('/categories', 'CategoryController@index')->name('category.index');
Route::get('/categories/new', 'CategoryController@new')->name('category.new');
Route::post('/categories', 'CategoryController@store')->name('category.store');
Route::get('/categories/{categoryId}', 'CategoryController@show')->name('category.show');
Route::get('/categories/{categoryId}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/categories/{categoryId}', 'CategoryController@update')->name('category.update');
Route::delete('/categories/{categoryId}', 'CategoryController@destroy')->name('category.destroy');       
Route::get('/categories/distinct', 'CategoryController@getDistinctCategories')->name('category.getDistinctCategories');       
