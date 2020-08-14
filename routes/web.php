<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'CustomerController@index')->name('customersList');
Route::get('/active', 'CustomerController@customersActive')->name('customersActive');
Route::get('/nonactive', 'CustomerController@customersNonActive')->name('customersNonActive');
Route::get('/createCustomer', 'CustomerController@createCustomer')->name('createCustomer');
Route::post('/createCustomer', 'CustomerController@validateCustomer')->name('validateCustomer');
Route::get('/customer/{id}', 'CustomerController@editCustomer')->name('editCustomer');
Route::post('/updateCustomer', 'CustomerController@updateCustomer')->name('updateCustomer');
