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

Route::get('/pages', 'PagesController@blog')->name('front.pages.blog');
Route::get('/contact', 'PagesController@contactUs')->name('front.pages.contact');
Route::post('/conract/send-message', 'PagesController@sendMessage')->name('front.pages.sendMessage');

//Route::get('/products/single/{product}', 'ProductsController@single')->name('front.products.single-product');


Route::get('/blog-post', 'BlogSectionController@post')->name('front.blog_section.post');
Route::get('/blog-tag', 'BlogSectionController@tag')->name('front.blog_section.tag');
Route::get('/blog-search', 'BlogSectionController@search')->name('front.blog_section.search');
Route::get('/blog-category', 'BlogSectionController@category')->name('front.blog_section.category');
Route::get('/blog-author', 'BlogSectionController@author')->name('front.blog_section.author');

//Route::get('/contact-us', 'ContactController@index')->name('front.contact.index');
//Route::post('/contact/send-message', 'ContactController@sendMessage')->name('front.contact.send_message');