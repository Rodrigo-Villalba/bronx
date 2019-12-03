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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductController@index');

Route::get('/searchProductos', 'ProductController@searchProducts');

Route::post('/addtocart', 'CartController@store')->middleware('auth');

Route::post('/remoteFromCart', 'CartController@eliminarCarritoItem');

Route::get('/cart', 'CartController@index')->middleware('auth');

Route::post('/cartclose', 'CartController@cartclose');

Route::get('/productos/{id}', 'ProductController@show');

Route::get('/history', 'CartController@history')->middleware('auth');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::post('/crearProducto', 'ProductController@create')->middleware('auth');

Route::get('/formularioCarga', 'ProductController@mostrarFormulario')->middleware('auth');
