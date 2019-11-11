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
    Route::get('/category/{kategori_id}','UserController@category')->name('category');
    Route::get('/subcategory/{subkategori_id}','UserController@subcategory')->name('subcategory');
    Route::get('/addfile/{subkategori_id}','UserController@addfile');
    Route::get('/searchfile/{nama_data}','UserController@searchfile');

    //POST METHOD
    Route::post('/subcategory/{kategori_id}','UserController@subcategoryStore')->name('subcategoryStore');
    Route::post('/addfile/{subkategori_id}','UserController@addfileStore')->name('addfileStore');

    //DELETE METHOD
    Route::get('/subcategory/delete/{subkategori_id}','UserController@deleteSubkategori');
    Route::get('/deletefile/{data_id}','UserController@deleteFile');
});
    
    // Ubah password controller
    Route::get('/upPass', 'AuthController@changepass')->name('upPass');
    Route::post('/upPass', 'AuthController@uppass')->name('uppass');
