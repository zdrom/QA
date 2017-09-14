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

Route::get('/', 'UploadController@index');

Route::get('/create', 'UploadController@create');

Route::post('/create', 'UploadController@store');

Route::get('/campaign/{campaign}', 'UploadController@show');

Route::get('/lineItem/{lineItem}' , 'LineItemController@show');

Route::get('/strategy/{strategy}', 'StrategyController@show');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();