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
Route::get('/contact', 'PagesController@contactUs')->name('front.pages.contact');
Route::post('/conract/send-message', 'PagesController@sendMessage')->name('front.pages.sendMessage');

//Route::get('/products/single/{product}', 'ProductsController@single')->name('front.products.single-product');


//Route::get('/contact-us', 'ContactController@index')->name('front.contact.index');
//Route::post('/contact/send-message', 'ContactController@sendMessage')->name('front.contact.send_message');