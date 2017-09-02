<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request; // nek diperlukan di lar 5.2
use App\Siswa; //model dari siswa

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $halaman = 'siswa';
        $siswa_list = Siswa::all()->sortBy('nama');
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('halaman', 'siswa_list', 'jumlah_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $halaman = 'siswa';
        return view('siswa.create', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
/*        $siswa = new \App\Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->save();*/ /*untuk satuan*/
        Siswa::create($request->all());
        return redirect('admin/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
