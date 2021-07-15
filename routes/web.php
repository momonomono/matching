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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', 'FormController@login')->name('login');
Route::post('/login','FormController@postLogin')->name('postLogin');

Route::get('/signup','FormController@signup')->name('signup');
Route::post('/signup','FormController@postSignup')->name('postSignup');
