<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RahasiaController extends Controller
{
    //
    public function halamanRahasia()
    {
    	return '<div align="center"><h2>anda melihat halaman</h2> <h1><p style="color:red"> Rahasia...</p></h1>.</div>';
    }


    public function showMe()
    {
    	//return redirect()->route('secret');
    	$url = route('secret');
    	$link = '<a href="'. $url .'">Ke halaman Rahasia</a>';
    	return $link;
    }
}
