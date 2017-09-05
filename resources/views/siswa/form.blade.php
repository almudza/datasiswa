@if (isset($siswa))
	{!! Form::hidden('id', $siswa->id) !!}
@endif

@if ($errors->any())
	<div class="from-group {{ $errors->has('nis') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
		{!! Form::label('nis', 'NISN:', ['class' => 'control-label']) !!}
		{!! Form::text('nis', null, ['class' => 'form-control']) !!}
			@if ($errors->has('nis'))
				<span class="help-block">{{ $errors->first('nis') }} </span>
			@endif
	</div>

@if ($errors->any())
	<div class="form-group {{ $errors->has('nama') ? 'has-error' : 'has-success' }}">
@else
	<div class="from-group">
@endif	
		{!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
		{!! Form::text('nama', null, ['class' => 'form-control']) !!}
			@if ($errors->has('nama'))
				<span class="help-block">{{ $errors->first('nama') }} </span>
			@endif
	</div>

@if ($errors->any())
	<div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif	
		{!! Form::label('tgl_lahir', 'Tgl Lahir:' ,['class' => 'control-label']) !!}
		{!! Form::date('tgl_lahir', !empty($siswa) ?
		$siswa->tgl_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
			@if ($errors->has('tgl_lahir'))
				<span class="help-block">{{ $errors->first('tgl_lahir') }} </span>
			@endif
	</div>

@if ($errors->any())
	<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }} ">
@else
	<div class="form-group">
@endif
		{!! Form::label('jenis_kelamin', 'Jenis Kelamin:' , ['class' => 'control-label']) !!}

		<div class="radio">
			<label>
				{!! Form::radio('jenis_kelamin', 'L') !!}Laki- laki
			</label>
		</div>

		<div class="radio">
			<label>
				{!! Form::radio('jenis_kelamin' , 'P') !!} Perempuan
			</label>
		</div>
			@if ($errors->has('jenis_kelamin'))
				<span class="help-block">{{ $errors->first('jenis_kelamin') }} </span>
			@endif
	</div>

	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
