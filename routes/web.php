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

Route::get('/category', function () {
    return view('kategori');
});

Auth::routes();

//BAWAH ROUTE DENGAN KONTROLLER//

<<<<<<< HEAD
Route::get('/wilayah/{berak}', 'PagesController@kota');
=======

Route::get('/wilayah/{wilayah}', 'PagesController@kota');

Route::get('/dashboard', 'SekolahController@index');
>>>>>>> 457a11afead830150821f706ac06c0712a59bd23

Route::get('/tambahdata', 'HomeController@tambahdata');

Route::get('gantipass', 'HomeController@gantipass');

Route::post('/tambahdata', 'SekolahController@tambah');

Route::post('/delete/{id}', 'SekolahController@destroy');

Route::get('/edit/{id}', 'SekolahController@edit');

Route::post('/updatedata/{id}', 'SekolahController@update');

//Route::post('/edit/{id}', 'SekolahController@update');


