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

Route::get('/', 'HomepageController@home');
Route::get('/catalogue', 'HomepageController@catalogue');
Route::get('catalogue/categories/{id}', 'HomepageController@category');
Route::get('catalogue/items/{id}', 'HomepageController@item');
Route::get('/news/{id}', 'HomepageController@news');
Route::get('/about-us', function () {
    return view('front.about-us');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::post('/contact', 'HomepageController@contact');
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
    // Route::get('/categories/delete/{category}', 'CategoryController@delete');

    Route::resource('items', 'ItemController');
    // Route::get('/items/delete/{item}', 'ItemController@delete');

    Route::resource('news', 'NewsController');
    // Route::get('/news/delete/{news}', 'NewsController@delete');

    Route::get('/gallery', 'GalleryController@edit');
    Route::get('/gallery/create', 'GalleryController@create');
    Route::post('/gallery/store', 'GalleryController@store');
    Route::post('/gallery/update', 'GalleryController@update');
    // Route::get('/gallery/delete/{carouselPic}', 'GalleryController@delete');
});
