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
route::post('/AddToCart', 'ShoppingCartController@AddToCart');
route::get('/GetFromCart', 'ShoppingCartController@GetFromCart');

/*Tijdelijk test functies*/
route::get('/killsession', 'ShoppingCartController@killsession');


