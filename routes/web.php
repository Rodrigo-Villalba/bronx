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
//Route::get('/', function () {
    //return view('home');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{product}', 'ProductController@show');
//Route::post('/addtocart', 'CartController@store');
//Route::get('/cart', 'CartController@index')->middleware('auth');
//Route::post('/cartclose', 'CartController@cartclose');
//Route::get('/history', 'CartController@history')->middleware('auth');

//Ruta con middleware nuevo: Roles.
//Route::get('/admin', 'AdminController@index')->middleware('auth')->middleware('roles');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/register', 'HomeController@index')->name('register');
//Route::get('/login', 'HomeController@index')->name('login');
//Route::get('/product/{product}', 'ProductController@show');
//Route::get('/', function(){
  //return view("home");
//});
//Route::get('/login', function(){
  //return view("login");
//});
//Route::get('/register', function(){
  //return view("register");
//});
