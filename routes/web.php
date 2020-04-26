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

Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('/displayitems', 'PagesController@displayitems');
Route::get('/dashboard' , 'PagesController@dashboard');
Route::get('/home' , 'PagesController@dashboard');
Route::get('/products' , 'ProductsController@index');
Route::get('/products/sort' , 'ProductsController@sortitems');
Route::get('/products/update' , 'ProductsController@update');
Route::get('/products/add' , 'ProductsController@additems');
Route::get('/products/{sku}' , 'ProductsController@show');
Route::get('/products/destroy/{sku}' , 'ProductsController@destroy');
Route::get('/products/edit/{sku}' , 'ProductsController@edit');