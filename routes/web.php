<?php

Route::get('post', function () {
    return 'Hello World';
});

Route::get('about', 'AboutController@Index');

Auth::routes();

l
Route::get('/home', 'HomeController@index')->name('home');


