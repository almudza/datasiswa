@extends('main')


@section('content')
<h2>Tambah Siswa</h2>



{!! Form::open(['url' => 'admin/siswa']) !!}
	@include('siswa.form', ['submitButtonText' => 'Tambah Siswa'])
{!! Form::close() !!}

@endsection