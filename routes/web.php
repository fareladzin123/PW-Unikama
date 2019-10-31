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

Route::view('/dashboard','user-side.dashboard');
Route::view('/category','user-side.category');
Route::view('/subcategory','user-side.subcategory');
Route::view('/findfile','user-side.findfile');

Route::view('/login','login.login');