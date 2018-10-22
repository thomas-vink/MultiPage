<?php

/*Returning Views*/
Route::get('/', 'HomeController@index');
route::get('/cart', 'ShoppingCartController@index')->name('cart');


/*Auth Functies*/
Route::get('/login','LoginController@index');
Route::get('/admin', 'AdminController@index');
Auth::routes();


/*Cart AJAX Functies*/
route::post('/AddToCart', 'ShoppingCartController@AddToCart');
route::get('/GetFromCart', 'ShoppingCartController@GetFromCart');

/*Tijdelijk test functies*/
route::get('/killsession', 'ShoppingCartController@killsession');


