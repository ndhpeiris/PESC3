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

Route::get('/','frontendcontroller@landingPage');
Route::get('/review','frontendcontroller@reviewPage');
Route::get('/residential','frontendcontroller@residentialPage');
Route::get('/commercial','frontendcontroller@commercialPage');

Route::get('/test','frontendcontroller@testPage');
Route::get('/user','frontendcontroller@userPage');
Route::resource('appoinment','appoinmentController');
Route::resource('invoice','invoiceController');
Route::resource('product','productController');
Route::resource('/invoice/report','invoiceController@report');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
