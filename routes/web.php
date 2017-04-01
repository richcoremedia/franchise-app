<?php

// Default
Route::get('/', function () {
    return view('welcome');
});

// Change Locale
Route::get('/language/{locale}', 'PublicController@language');

// Public
Route::get('/contact', 'PublicController@contact');
Route::get('/office', 'PublicController@office');
Route::get('/agent', 'PublicController@agent');
Route::get('/property/{id}/{name}', 'PublicController@propertyDetails');
Route::get('/property', 'PublicController@property');