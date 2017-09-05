<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa; //Siswa include model

class PagesController extends Controller
{
    //
    public function home()
    {
    	$halaman = 'home';
        $siswa_list = Siswa::all()->sortByDesc('nama');
        $jumlah_siswa = $siswa_list->count();
    	return view('pages.index', compact('halaman', 'siswa_list', 'jumlah_siswa'));
    }

    public function about()
    {
    	$halaman = 'about';
    	return view('pages.about');

    }
}
