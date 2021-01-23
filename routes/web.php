<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/detail', 'App\Http\Controllers\ProductdetailController@index');
Route::get('/detail/cart', 'App\Http\Controllers\ProductdetailController@cart');
