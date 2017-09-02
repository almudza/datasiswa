@extends('main')


@section('content')

<h2>Edit Siswa</h2>


{!! Form::model($siswa, ['method' => 'PATCH', 'action' =>['SiswaController@update', $siswa->id]]) !!}
	@include('siswa.form', ['submitButtonText' => 'Update Siswa'])
{!! Form::close() !!}
</div>

@endsection