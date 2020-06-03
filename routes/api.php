<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// like route
Route::prefix('like')->group(function(){
    Route::post('/user', 'ProductController@like');
});


Route::prefix('user')->group(function (){
    Route::get('/category', 'LandingController@category');
    // Route::get('/product/{id?}', 'ProductsController@Allproduct');
    // Route::get('/product/single/{id?}', 'ProductsController@SingleProduct');
    // Route::post('/order/gig/{id?}', 'OrderController@OrderProduct');
});