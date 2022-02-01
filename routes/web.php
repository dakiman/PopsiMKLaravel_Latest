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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomepageController@home');
Route::get('/products', 'HomepageController@products');
Route::get('/about', 'HomepageController@about');
Route::get('/contact', 'HomepageController@contact');
Route::post('/contact', 'HomepageController@sendContactMessage');
Route::get('/products/{item}', 'HomepageController@item');
/*===================================*/
Route::get('catalogue/categories/{id}', 'HomepageController@category');
Route::get('catalogue/items/{id}', 'HomepageController@item');
Route::get('/news/{id}', 'HomepageController@news');

Route::get('/partners', function () {
    return view('front.partners');
});


Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logoutUser');
});
Route::get('/changelocale/{locale}', 'HomepageController@changeLocale');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'AdminController@index');

    Route::resource('categories', 'CategoryController');

    Route::resource('items', 'ItemController');

    Route::resource('news', 'NewsController');

    Route::get('/gallery', 'GalleryController@edit');
    Route::get('/gallery/create', 'GalleryController@create');
    Route::post('/gallery/store', 'GalleryController@store');
    Route::post('/gallery/update', 'GalleryController@update');

    Route::post('/category/{category}', 'CategoryController@toggle');
    Route::post('/item/{item}', 'ItemController@toggle');
    Route::post('/news/{news}', 'NewsController@toggle');

    Route::post('/item/delete/{item}', 'ItemController@delete');
    Route::post('/category/delete/{category}', 'CategoryController@delete');
    Route::post('/news/delete/{news}', 'NewsController@delete');
    Route::post('/gallery/delete/{carouselPic}', 'GalleryController@delete');
});
