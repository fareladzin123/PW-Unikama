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

//Auth Controller
Route::get('/login', 'AuthController@indexLogin')->name('login');
Route::post('/login', 'AuthController@checkLogin')->name('checkLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/register', 'AuthController@indexRegister')->name('register');
Route::post('/register', 'AuthController@postRegister')->name('postRegister');

Route::middleware(['auth','revalidate'])->group(function(){
    Route::get('/dashboard','UserController@dashboard');
    Route::get('/category','UserController@category');
    Route::get('/subcategory','UserController@subcategory');
    Route::get('/searchfile','UserController@searchfile');    
});