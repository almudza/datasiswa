<?php

namespace App\Http\Controllers;


use Validator; //validasi form
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

        $siswa_list = Siswa::orderBy('nama', 'asc')->Paginate(10);
        $jumlah_siswa = Siswa::count();
        return view('siswa.index', compact( 'siswa_list', 'jumlah_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('siswa.create');
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

        $input = $request->all();

        $validator = Validator::make($input, [
            'nis' => 'required|string|size:4|unique:siswa,nis',
            'nama' => 'required|string|max:30',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            ]);

        if ($validator->fails()) {
            return redirect('admin/siswa/create')
            ->withInput()
            ->withErrors($validator);
        }

        Siswa::create($input);
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

        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        $siswa = Siswa::findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($input, [
            'nis' => 'required|string|size:4|unique:siswa,nis,' . $request->input('id'),
            'nama' => 'required|string|max:30',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            ]);

        if ($validator->fails()) {
            return redirect('admin/siswa/'. $id . '/edit')->withInput()->withErrors($validator);
        }
        $siswa->update($request->all());
        return redirect('admin/siswa');
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
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('admin/siswa');
    }

    public function tesCollection()
    {
        $collection = Siswa::all();
        $jumlah = $collection->count();
        return 'Jumlah : '. $jumlah;
    }

    //dateMutator
    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(4);
        $str = 'Tanggal Lahir : '.
            $siswa->tgl_lahir->format('d-m-Y'). '<br>' .
            'Ulang Tahun ke 30 akan jatuh pada tanggal : ' .
            '<strong>' .
            $siswa->tgl_lahir->addYears(30)->format('d-m-Y').
            '</strong>';
            return $str;
    }
}
