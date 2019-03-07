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



Route::group(['namespace' => 'front'], function () {
    Route::get('/', 'FrontController@index')->name('/');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::get('/blogpages', 'FrontController@blogpages')->name('blogpages');
    Route::get('/author', 'FrontController@author')->name('author');
    Route::get('/category', 'FrontController@category')->name('category');
    Route::get('/contact', 'FrontController@contact')->name('contact');
});



Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
