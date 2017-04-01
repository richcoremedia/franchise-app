<?php

// Default
Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', 'PublicController@contact');