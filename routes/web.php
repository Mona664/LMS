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

Auth::routes();

Route::get('/home','App\Http\Controllers\HomeController@home')->name('home');
//Dashboard
// Faculty
Route::get('/faculties/add','App\Http\Controllers\FacultyController@add');
Route::get('/faculties/all','App\Http\Controllers\FacultyController@all');
Route::post('/faculties/store','App\Http\Controllers\FacultyController@store');
Route::get('/faculties/delete/{id}','App\Http\Controllers\FacultyController@delete');
Route::get('/faculties/edit/{id}','App\Http\Controllers\FacultyController@edit');
Route::post('/faculties/update/{id}','App\Http\Controllers\FacultyController@update');

//hour price
Route::get('/hour/add','App\Http\Controllers\FacultyController@add');
Route::get('/hour/all','App\Http\Controllers\FacultyController@all');
Route::post('/hour/store','App\Http\Controllers\FacultyController@store');
Route::get('/hour/delete/{id}','App\Http\Controllers\FacultyController@delete');
Route::get('/hour/edit/{id}','App\Http\Controllers\FacultyController@edit');
Route::post('/hour/update/{id}','App\Http\Controllers\FacultyController@update');

//mat
Route::get('/mat/add','App\Http\Controllers\MatController@add');
Route::get('/mat/all','App\Http\Controllers\MatController@all');
Route::post('/mat/store','App\Http\Controllers\MatController@store');
Route::get('/mat/delete/{id}','App\Http\Controllers\MatController@delete');
Route::get('/mat/edit/{id}','App\Http\Controllers\MatController@edit');
Route::post('/mat/update/{id}','App\Http\Controllers\MatController@update');
