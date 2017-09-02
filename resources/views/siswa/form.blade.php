<div class="form-group">
	{!! Form::label('nis', 'NISN:', ['class' => 'control-label']) !!}
	{!! Form::text('nis', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
	{!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tgl_lahir', 'Tgl Lahir:' ,['class' => 'control-label']) !!}
	{!! Form::date('tgl_lahir', null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
</div>

<div class="form-group">
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

	<div class="form-group">
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>