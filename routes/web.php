<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//Get route ex

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/404', 'App\Http\Controllers\PagesController@error');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/courses', 'App\Http\Controllers\PagesController@courses');
Route::get('/team', 'App\Http\Controllers\PagesController@team');
Route::get('/testimonial', 'App\Http\Controllers\PagesController@testimonial');