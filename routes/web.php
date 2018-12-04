<?php

/*Returning Views*/
Route::get('/cart', 'ShoppingCartController@index')->name('cart');
Route::get('/Category','CategoryController@index')->name('category');
Route::get('/orderdetails/{id}', 'OrderController@getDetails');
Route::get('/orders', 'OrderController@getOrders')->name('orders');

/*Home Functies*/
Route::get('/', 'HomeController@GetProducts');
Route::get('/product/{id}','Homecontroller@GetDetails');
Route::get('/home', 'HomeController@GetProducts');
Route::post('/category','HomeController@Category');


/*Auth spul*/
Route::get('/login','LoginController@index');
Route::get('/admin', 'AdminController@index');
Auth::routes();


/*Cart Functies*/
Route::post('/AddToCart', 'ShoppingCartController@AddToCart');
Route::get('/GetFromCart', 'ShoppingCartController@GetFromCart');
Route::post('/changeAmount/{id}', 'ShoppingCartController@ChangeAmount');
Route::get('/delete/{id}', 'ShoppingCartController@DeleteSession');

Route::get('/checkout', 'OrderController@save');



/*Tijdelijk test functies*/
route::get('/killsession', 'ShoppingCartController@killsession');




