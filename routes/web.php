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
Route::any('/','Welcome@showArticleTitle');
Route::any('/register','Welcome@register');
Route::view('/personal_home/messageBoard','personal_home/messageBoard');