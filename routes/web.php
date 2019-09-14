<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');

Auth::routes();