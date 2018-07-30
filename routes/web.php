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

Route::get('/usuario','UserController@index')->name('user.index');
Route::get('/usuario/create','UserController@create');
Route::post('/usuario/store','UserController@store')->name('user.store');
Route::delete('/usuario/{id}/delete','UserController@destroy')->name('user.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
