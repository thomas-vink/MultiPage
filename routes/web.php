<?php

/*Returning Views*/
Route::get('/', 'HomeController@GetProducts');
Route::get('/cart', 'ShoppingCartController@index')->name('cart');
Route::get('/product/{id}','Homecontroller@GetDetails');


/*Auth Functies*/

Route::get('/login','LoginController@index');
Route::get('/admin', 'AdminController@index');
Auth::routes();


/*Cart AJAX Functies*/
Route::post('/AddToCart', 'ShoppingCartController@AddToCart');
Route::get('/GetFromCart', 'ShoppingCartController@GetFromCart');
Route::post('/changeAmount/{id}', 'ShoppingCartController@ChangeAmount');

/*Tijdelijk test functies*/
route::get('/killsession', 'ShoppingCartController@killsession');


