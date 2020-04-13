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
//FRONT
Route::get('/', 'IndexController@index')->name('front.index.index');
Route::get('/newest-posts', 'IndexController@getNewestPosts')->name('front.footer.newest_posts');


Route::get('/blog', 'BlogController@index')->name('front.blog.index');
Route::get('/contact', 'ContactController@contactUs')->name('front.contact.contact');
Route::post('/contact/send-message', 'ContactController@sendMessage')->name('front.contact.sendMessage');

Route::post('/comment/send-comment/{post}', 'CommentsController@sendComment')->name('front.comment.sendComment');

Route::get('/categories/{category}/{seoSlug?}', 'BlogController@singleCategory')->name('front.blog.single-category');
Route::get('/tags/{tag}/{seoSlug?}', 'BlogController@singleTag')->name('front.blog.single-tag');
Route::get('/users/{user}/{seoSlug?}', 'BlogController@singleUser')->name('front.blog.single-user');
Route::get('/single-post/{post}/{seoSlug?}', 'BlogController@singlePost')->name('front.blog.post');
Route::post('/search', 'BlogController@search')->name('front.blog.search');

//AUTH
Auth::routes(); //registracija ruta: /login, /password/reset ...
//ADMIN
Route::middleware('auth')->prefix('/admin')->namespace('Admin')->group(function () {

    Route::get('/dashboard', 'HomeController@index')->name('home');


    Route::prefix('/tags')->group(function () {

        Route::get('/', 'TagController@index')->name('home.tags');
        Route::post('/', 'TagController@addTag')->name('home.tags.add');
        Route::get('/{tag}', 'TagController@deleteTag')->name('home.tags.delete');
        Route::post('/{tag}', 'TagController@updateTag')->name('home.tags.update');
    });

    Route::prefix('/categories')->group(function () {

        Route::get('/', 'CategoryController@index')->name('home.categories');
        Route::post('/', 'CategoryController@addCategory')->name('home.categories.add');
        Route::get('/{category}', 'CategoryController@deleteCategory')->name('home.categories.delete');
        Route::post('/{category}', 'CategoryController@updateCategory')->name('home.categories.update');
    });

    Route::prefix('/posts')->group(function () {

        Route::get('/important/{post}', 'PostController@setImportant')->name('home.posts.important');
        Route::get('/able-disable/{post}', 'PostController@ableDisable')->name('home.posts.ableDisable');
        Route::get('new', 'PostController@idnexNew')->name('home.posts.new');
        Route::post('new', 'PostController@addPost')->name('home.posts.new.submit');
        Route::get('delete/{post}', 'PostController@deletePost')->name('home.posts.delete');
        Route::get('edit/{post}', 'PostController@openEditPost')->name('home.posts.update');
        Route::post('edit/{post}', 'PostController@updatePost')->name('home.posts.update.submit');
        Route::post('/search', 'PostController@search')->name('home.posts.search');
    });

    Route::prefix('/users')->group(function () {

        Route::get('/', 'UserController@index')->name('home.users');
        Route::post('/insert', 'UserController@addUser')->name('home.users.add');
        Route::post('/update', 'UserController@updateUser')->name('home.users.edit');
    });
    
    Route::prefix('/slides')->group(function () {

        Route::get('/', 'SlidesController@index')->name('home.slides');
    });
});
