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
    return view('list');
});

Route::get('/helo',function () {
    return view('template');
});
Route::get('halo', function() {
	return view('Master/master');
});

Route::get('table', 'BarangController@index');
Route::get('table/tambah','BarangController@tambah');
Route::post('/table/store', 'BarangController@store');
Route::get('/table/edit/{id}','BarangController@edit');
Route::post('/table/update','BarangController@update');
Route::get('/table/hapus/{id}','BarangController@hapus');
//Route::post('/table/tambah1', 'BarangController@actionTambah');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
