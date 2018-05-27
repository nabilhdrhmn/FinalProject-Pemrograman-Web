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
    return view('index');
});

// Route::get('/login-admin', function () {
//     return view('login');
// });

Route::get('/category', function () {
    return view('category');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});

// Route::get('/index-admin', function () {
//     return view('admin_index');
// });

// Route::get('/tambahdata-admin', function () {
//     return view('admin_tambahdata');
// });
	
// Route::get('/ubahpassword-admin', function () {
//     return view('admin_ubahpassword');
// });
Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/tambahdata-admin', 'HomeController@tambah_sekolah');
Route::get('/admin_ubahpassword', 'HomeController@ganti_pass');

