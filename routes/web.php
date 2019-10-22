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

Route::get('/', 'login@indexlogin') ;
Route::get('/register', 'login@indexregister') ;


Route::get('/home', 'home@indexhome') ;
Route::get('/pertama', 'home@indexpertama') ;
Route::get('/kedua', 'home@indexkedua') ;
Route::get('/ketiga', 'home@indexketiga') ;
