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
Route::get('/changelocale/{locale}', 'HomepageController@changeLocale');


Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logoutUser');
});

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'AdminController@index');
    Route::resource('categories', 'CategoryController');
    Route::get('/categories/delete/{category}', 'CategoryController@delete');
});
