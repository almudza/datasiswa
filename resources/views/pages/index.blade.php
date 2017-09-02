@extends('main')

@section('title', 'Siswa')

@section('content')

	<h2>Siswa</h2>
	<hr>
	@if (!empty($siswa_list))
		<table class="table">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Tgl Lahir</th>
					<th>JenKel</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($siswa_list as $siswa)
				<tr>
					<td>{{ $siswa->nis }} </td>
					<td>{{ $siswa->nama }} </td>
					<td>{{ $siswa->tgl_lahir }} </td>
					<td>{{ $siswa->jenis_kelamin }} </td>
					<td>{{ link_to('siswa/' . $siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }} </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data Siswa</p>
	@endif
<hr>
	<div class="pul-left">
		<strong>Jumlah Siswa : {{ $jumlah_siswa }} </strong>
	</div>

@endsection