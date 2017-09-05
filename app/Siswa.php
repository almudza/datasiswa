<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';


    protected $fillable = [
    	'nis',
    	'nama',
    	'tgl_lahir',
    	'jenis_kelamin'

    ];
    //date mutator
    protected $dates = ['tgl_lahir'];

    //elequent accessor 
    public function getNamaAttribute($nama) 
    {
    	return ucwords($nama);
    }

    //elquent Mutator 
    public function SetNamaAttribute($siswa)
    {
    	$this->attributes['nama'] = strtolower($siswa);
    }
}
