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
Route::group([ 'middleware'=>['auth', 'verified']], function () {
    Route::post('/insert-comment', 'CommentController@insert')->name('insert-comment');
    Route::post('/reply', 'CommentController@reply')->name('reply');
});

// Route::group(['namespace'=>'Admin', ], function() {
    
//     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// });


Route::group(['namespace'=> 'back', 'middleware'=>['auth', 'verified', 'admin']], function () {
    
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
    Route::get('slider/{id}', 'BlogController@Slider')->name('slider');
    Route::get('add-slider/{id}', 'BlogController@addslider')->name('add-slider');
    Route::get('edit-slider/{id}', 'BlogController@editslider')->name('edit-slider');
    Route::get('delete-slider/{id}', 'BlogController@deleteslider')->name('delete-slider');
    Route::post('insert-slider', 'BlogController@insertslider')->name('insert-slider');
    Route::post('update-slider', 'BlogController@updateslider')->name('update-slider');
    // =======slider route end===================


    // =======Blog Post route start===================
    Route::get('blog-posts', 'BlogController@blogPosts')->name('blog-posts');
    Route::get('add-blogpost', 'BlogController@addPost')->name('add-blogpost');
    Route::get('blog-singlepost/{id}', 'BlogController@blogSinglepost')->name('blog-singlepost');
    Route::get('blog-editepost/{id}', 'BlogController@blogEditePost')->name('blog-editepost');
    Route::get('blog-deletepost/{id}', 'BlogController@blogDeletePost')->name('blog-deletepost');
    Route::post('insert-blogpost', 'BlogController@insertBlogpost')->name('insert-blogpost');
    Route::post('update-blogpost', 'BlogController@updateBlogpost')->name('update-blogpost');
    
    // =======Photo glallry route start===================
    Route::get('add-glphoto/{id}', 'BlogController@addglphoto')->name('add-glphoto');
    Route::get('delete-glphoto/{id}', 'BlogController@deleteglphoto')->name('delete-glphoto');
    Route::get('edit-glphoto/{id}', 'BlogController@editglphoto')->name('edit-glphoto');
    Route::get('glphoto', 'BlogController@glphoto')->name('glphoto');
    Route::post('insert-glphoto', 'BlogController@insertglphoto')->name('insert-glphoto');



    // =======Photos route start===================
    Route::get('/photos', 'BlogController@photos')->name('photos');
    Route::get('/add-photo', 'BlogController@addPhoto')->name('add-photo');
    Route::get('/edit-photo/{id}', 'BlogController@editPhoto')->name('edit-photo');
    Route::get('/delete-photo/{id}', 'BlogController@deletePhoto')->name('delete-photo');
    Route::post('/insert-photo', 'BlogController@insertPhoto')->name('insert-photo');
    
    
    // =======blog-cate route start===================
    Route::get('/blog-cate', 'BlogCategController@index')->name('blog-cate');
    Route::get('/add-blog-cate', 'BlogCategController@addblog-cate')->name('add-blog-cate');
    Route::get('/edit-blog-cate/{id}', 'BlogCategController@editblog-cate')->name('edit-blog-cate');
    Route::get('/delete-blog-cate/{id}', 'BlogCategController@deleteblogcate')->name('delete-blog-cate');
    Route::post('/insert-blog-cate', 'BlogCategController@insertblogcate')->name('insert-blog-cate');
    
    // =======Category route start===================
    Route::get('/Categories', 'BlogController@Categories')->name('Categories');
    Route::get('/add-Category', 'BlogController@addCategory')->name('add-Category');
    Route::get('/edit-Category/{id}', 'BlogController@editCategory')->name('edit-Category');
    Route::get('/delete-Category/{id}', 'BlogController@deleteCategory')->name('delete-Category');
    Route::post('/insert-Category', 'BlogController@insertCategory')->name('insert-Category');
    
    
    
    
});


Route::get('admin', 'HomeController@index')->name('admin')->middleware('admin');


Auth::routes();

