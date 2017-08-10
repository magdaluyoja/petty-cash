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

Route::get('/', "PagesController@getIndex");
Route::get('getLogin', "CLoginController@getLogin");
Route::post('postLogin', "CLoginController@postLogin");

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', "Auth\LoginController@authenticate");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');