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
    Route::get('/blogpages', 'BlogFrontController@blogpages')->name('blogpages');
    Route::get('/author', 'FrontController@author')->name('author');
    Route::get('/category', 'FrontController@category')->name('category');
    Route::get('/contact', 'FrontController@contact')->name('contact');
});

Route::group(['namespace'=> 'back'], function () {
    
    Route::get('about-bio', 'AboutController@index')->name('bio');
    Route::get('add-bio', 'AboutController@addBio')->name('add-bio');
    Route::get('edit-bio/{id}', 'AboutController@editBio')->name('edit-bio');
    Route::get('bio-delete/{id}', 'AboutController@deleteBio')->name('bio-delete');
    Route::post('insert-bio', 'AboutController@insertBio')->name('insert-bio');
    Route::post('update-bio', 'AboutController@updateBio')->name('update-bio');
    
    Route::get('about-posts', 'AboutController@Posts')->name('posts');
    Route::get('add-post', 'AboutController@addPosts')->name('add-post');
    Route::get('edit-post/{id}', 'AboutController@editPosts')->name('edit-post');
    Route::get('delete-post/{id}', 'AboutController@deletePosts')->name('delete-post');
    Route::post('insert-post', 'AboutController@insertPosts')->name('insert-post');
    Route::post('update-post', 'AboutController@updatePosts')->name('update-post');
    
    Route::get('about-info', 'AboutController@info')->name('info');
    Route::get('add-info', 'AboutController@addinfo')->name('add-info');
    Route::get('edit-info/{id}', 'AboutController@editinfo')->name('edit-info');
    Route::get('delete-info/{id}', 'AboutController@deleteinfo')->name('delete-info');
    Route::post('insert-info', 'AboutController@insertinfo')->name('insert-info');
    Route::post('update-info', 'AboutController@updateinfo')->name('update-info');
    
    // =======slider route start===================
    Route::get('slider', 'BlogController@Slider')->name('slider');
    Route::get('add-slider', 'BlogController@addslider')->name('add-slider');
    Route::get('edit-slider/{id}', 'BlogController@editslider')->name('edit-slider');
    Route::get('delete-slider/{id}', 'BlogController@deleteslider')->name('delete-slider');
    Route::post('insert-slider', 'BlogController@insertslider')->name('insert-slider');
    Route::post('update-slider', 'BlogController@updateslider')->name('update-slider');
    // =======slider route end===================
});




Auth::routes();

Route::get('admin', 'HomeController@index')->name('admin');
