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

Route::prefix('/')->group(function(){
    Route::get('/', 'LandingController@index');
});

// auth user route
Route::prefix('user')->group(function(){
    Route::post('/poem/upload', 'ProductsController@PoemUpload');
});

// admin routes
Route::prefix('admin')->group(function(){
    Route::get('/home', 'AdminController@index');
    Route::get('/order/single/{id?}', 'AdminController@showOrder');
    Route::get('/order/decline/{id?}', 'AdminController@declineOrder');
});

// home routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{id?}', 'ProductsController@Allproduct');
Route::get('/product/single/{id?}', 'ProductsController@SingleProduct');
Route::post('/order/gig/{id?}', 'OrderController@OrderProduct');

Route::get("/test", 'AdminController@test');

