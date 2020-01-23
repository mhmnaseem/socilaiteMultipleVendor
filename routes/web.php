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

Route::get('login/{provider}', 'Auth\LoginController@auth')
    ->where(['provider' => 'facebook|google|twitter|github']);

Route::get('login/{provider}/callback', 'Auth\LoginController@login')
    ->where(['provider' => 'facebook|google|twitter|github']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
