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
					<td>
						<div class="box-button">
							{{ link_to('admin/siswa/' . $siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
						</div>  
						<div class="box-button">
							{{ link_to('admin/siswa/' . $siswa->id .'/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
						</div>

						<div class="box-button">
							{!! Form::open(['method' =>'DELETE', 'action' => ['SiswaController@destroy' , $siswa->id]]) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
							{!! Form::close() !!}
						</div>
					<td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data Siswa</p>
	@endif
<hr>
	
	<div class="table-bottom">
		<div class="pull-left">
			<strong>Jumlah Siswa :{{ $jumlah_siswa }} </strong>
		</div>
		<div class="pull-right">
			Pagination
		</div>
	</div>

	<div class="bottom-nav">
		<div>
			<a href="{{ url('admin/siswa/create') }}" class="btn btn-primary">
			Tambah Siswa</a>
		</div>
	</div>

@endsection