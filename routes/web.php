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

Route::get('/', 'HomeController@index');


Route::get('/check', 'HomeController@checkResult');
Route::get('/getdata/{$record}', 'TransactionController@search');

Route::get('/monthly', 'TransactionController@monthly');
Route::get('/monthly/{date}', 'TransactionController@getmonthly');

Route::resource('transactions', 'TransactionController');


// for users

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
