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


/* halaman statis dengan controller*/
Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');


/*route siswa*/
Route::get('admin/siswa', 'SiswaController@index'); // tampil index
Route::get('admin/siswa/create', 'SiswaController@create'); //buat
Route::get('admin/siswa/{siswa}', 'SiswaController@show'); //detail
Route::post('admin/siswa', 'SiswaController@store'); //kirim data


/*halaman-rahasia*/
Route::get('halaman-rahasia', [
	'as' => 'secret',
	'uses' => 'RahasiaController@halamanRahasia'
	]);
Route::get('showme', 'RahasiaController@showMe');



