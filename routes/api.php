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

Route::post('/category/{category}', 'CategoryController@toggle');
Route::post('/item/{item}', 'ItemController@toggle');
Route::post('/news/{news}', 'NewsController@toggle');

Route::post('/item/delete/{item}', 'ItemController@delete');
Route::post('/category/delete/{category}', 'CategoryController@delete');
Route::post('/news/delete/{news}', 'NewsController@delete');
Route::post('/gallery/delete/{carouselPic}', 'GalleryController@delete');
