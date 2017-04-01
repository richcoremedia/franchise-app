<?php

// Default
Route::get('/', function () {
    return view('welcome');
});

// Change Locale
Route::get('/language/{locale}', 'PublicController@language');

// Public
Route::get('/contact', 'PublicController@contact');