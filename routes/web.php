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
/* Web routes*/
Route::get('/', 'PagesController@index');
//Route::get('/tour', 'PagesController@tour');
Route::get('/admin', 'PagesController@adminpage');
Route::get('/about', 'PagesController@about');

/* Tour Controller Routes*/

Route::resource('tours','ToursController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
