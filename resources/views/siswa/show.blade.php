@extends('main')

@section('content')

<h2>Detail Siswa</h2>

<table class="table table-striped">
	<tr>
		<th>NISN</th>
		<td>{{ $siswa->nis }} </td>
	</tr>
	<tr>
		<th>Nama</th>
		<td>{{ $siswa->nama }} </td>
	</tr>
	<tr>
		<th>Tgl Lahir</th>
		<td>{{ $siswa->tgl_lahir }} </td>
	</tr>
	<tr>
		<th>Jenis Kelamain</th>
		<td>{{ $siswa->jenis_kelamin }} </td>
	</tr>
</table>

@endsection