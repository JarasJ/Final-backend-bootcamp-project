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

Route::get("/", "RegistrationController@index");

// registration and login Controllers

Route::post("/register", "RegistrationController@register");
Route::post('/login_in', 'RegistrationController@login_in');
Route::get('/admin/validate', 'RegistrationController@adminVal');

Route::get('/main', 'RegistrationController@main');
Route::get('/logout', "RegistrationController@logout");

Route::get('/admin', 'RegistrationController@admin');
