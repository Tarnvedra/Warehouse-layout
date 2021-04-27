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
Route::get('/dashboard' , 'PagesController@dashboard')->name('dashboard');
Route::get('/products/add' , 'ProductsController@additems')->name('item.add');
Route::get('/products/sort' , 'ProductsController@sortitems')->name('items.sort');
Route::get('/products/display' , 'ProductsController@displayitems')->name('items.display');
Route::get('/products/delete' , 'ProductsController@deleteitems')->name('item.delete');
Route::delete('/product/{id}/destroy' , 'ProductsController@destroy');
Route::resource('products', 'ProductsController');

