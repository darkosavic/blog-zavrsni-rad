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

Route::get('/', 'IndexController@index')->name('front.index.index');

Route::get('/blog', 'BlogController@index')->name('front.blog.index');
Route::get('/contact', 'ContactController@contactUs')->name('front.contact.contact');
Route::post('/contact/send-message', 'ContactController@sendMessage')->name('front.contact.sendMessage');

Route::post('/comment/send-comment/{post}', 'CommentsController@sendComment')->name('front.comment.sendComment');

Route::get('/categories/{category}', 'BlogController@singleCategory')->name('front.blog.single-category');
Route::get('/tags/{tag}', 'BlogController@singleTag')->name('front.blog.single-tag');
Route::get('/users/{user}', 'BlogController@singleUser')->name('front.blog.single-user');
Route::get('/single-post/{post}', 'BlogController@singlePost')->name('front.blog.post');
Route::post('/search', 'BlogController@search')->name('front.blog.search');


//Route::get('/contact-us', 'ContactController@index')->name('front.contact.index');
//Route::post('/contact/send-message', 'ContactController@sendMessage')->name('front.contact.send_message');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
