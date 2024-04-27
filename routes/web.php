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

use App\Http\Controllers\Locations\LocationsController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [PagesController::class ,'index']);


Route::get('/dashboard' , [PagesController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
Route::get('/products/add' , [ProductsController::class, 'addItems'])->name('item.add');
Route::get('/products/sort' , [ProductsController::class, 'sortItems'])->name('items.sort');
Route::get('/products/display' , [ProductsController::class, 'displayItems'])->name('items.display');
Route::get('/products/delete' , [ProductsController::class , 'deleteItems'])->name('item.delete');
Route::delete('/product/{id}/destroy' , [ProductsController::class, 'destroy']);
Route::resource('products', 'ProductsController');
});

