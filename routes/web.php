<?php

// Default
Route::get('/', function () {
    return view('welcome');
});

// Change Locale
Route::get('/language/{locale}', 'PublicController@language');

// Public
Route::get('/assessment', 'PublicController@assessment');
Route::get('/buy', 'PublicController@buy');
Route::get('/sell', 'PublicController@sell');
Route::get('/rent', 'PublicController@rent');
Route::get('/contact', 'PublicController@contact');
Route::get('/office', 'PublicController@office');
// Route::get('/officeDetails/{id}', 'PublicController@officeDetails');
Route::get('/company', 'PublicController@company');
Route::get('/agent', 'PublicController@agent');
Route::get('/agentDetails/{id}', 'PublicController@agentDetails');
Route::get('/property', 'PublicController@property');
Route::get('/propertyDetails/{id}', 'PublicController@propertyDetails');
Route::post('/propertyDetails/{id}', 'PublicController@contactAgent');
Route::get('/news', 'PublicController@news');

Auth::routes();

Route::get('/home', 'HomeController@index');
