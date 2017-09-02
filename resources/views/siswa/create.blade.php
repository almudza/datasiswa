@extends('main')


@section('content')
<h2>Tambah Siswa</h2>

{!! Form::open(['url' => 'admin/siswa']) !!}
	<div class="form-group">
		{!! Form::label('nis', 'NISN: ', ['class' =>'control-label']) !!}
		{!! Form::text('nis', null, ['class' => 'from-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama: ', ['class' => 'control-label']) !!}
		{!! Form::text('nama', null, ['class' => 'from-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tgl Lahir:', ['class' => 'control-label']) !!}
		{!! Form::date('tgl_lahir', null, ['class' => 'from-control', 'id' => 'tgl_lahir']) !!}
	</div>

	<dic class="form-group">
		{!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class' => 'control-label']) !!}

		<div class="radio">
			<label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki- laki </label>
		</div>
		<div class="radio">
			<label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan </label>
		</div>
	</dic>

	<div class="form-group">
		{!! Form::submit('Tambah Siswa', ['class' => 'btn btn-primary from-control']) !!}
	</div>
{!! Form::close() !!}

@endsection