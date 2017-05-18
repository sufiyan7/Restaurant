<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@getHome');

Route::get('/menu', 'PagesController@getMenu');

Route::get('/contact', 'PagesController@getContact');


// Admin Panel Routes

Route::get('/admin', 'ContactController@getAdmin');

Route::resource('admin/food','FoodController');

Route::resource('admin/contact','ContactController');

Route::get('downloadExcel/{type}', 'ContactController@downloadExcel');

Route::auth();
