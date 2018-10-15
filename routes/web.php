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

Route::get('/login','LoginController@index');
Route::get('/admin', 'AdminController@index');

route::get('/cart', 'ShoppingCartController@index')->name('cart');
route::post('/add', 'ShoppingCartController@AddToCart');

route::get('/killsession', 'ShoppingCartController@killsession');

Auth::routes();
