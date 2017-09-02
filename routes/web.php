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




/*tanpa controller*/
/*
Route::get('/', function () {
	$halaman = '/';
    return view('pages.homepage', compact('halaman'));
});

Route::get('about', function() {
	$halaman = 'about';
	return view('pages.about', compact('halaman'));
});


Route::get('siswa', function() {
	$siswa = ['Alief', 'Mudza', 'Setya',
	'Munfa'];

	$halaman = 'siswa';

	$data = ['nama' => 'Mudza',
			'kelas' => 12];
	return view('siswa.index', compact('halaman','siswa'));
	//return view('siswa.index')->with('siswa', $siswa);
});


*/


/*redirect halaman url*/
/*Route::get('halaman-rahasia', function() {
	return 'Anda sedang melihat <strong> halaman-rahasia </strong>';
})->name('secret');

	Route::get('sw', function() {
		return redirect()->route('secret');
	});*/