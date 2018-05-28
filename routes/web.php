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


Route::get('/wilayah/{berak}', 'PagesController@kota');

Route::get('/dashboard', 'SekolahController@index');
Route::get('/tambahdata', 'HomeController@tambahdata');
Route::get('gantipass', 'HomeController@gantipass');

Route::post('/tambahdata', 'SekolahController@tambah');
Route::post('/delete/{id}', 'SekolahController@destroy');
