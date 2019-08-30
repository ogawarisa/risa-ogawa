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

Route::post('/blog/store' , 'BlogController@store');
Route::post('/blog/delete/{id}' , 'BlogController@delete');
Auth::routes();
Route::get('/home' , 'HomeController@index')->name('home');
Route::get('/users' , 'UserController@index');
Route::get('/home/{id}' , 'UserController@show');

Route::get('/user/{id}/follow' , 'UserController@follow');
Route::get('/user/{id}/unfollow' , 'UserController@unfollow');