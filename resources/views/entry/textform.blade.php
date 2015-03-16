@extends('entry.master')

@section('content')

{!! Form::open(['enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{!! Form::text('nume', null, ['placeholder' => 'Nume']) !!}
	</div>

	<div class="form-group">
		{!! Form::text('telefon', null, ['placeholder' => 'Telefon']) !!} 
	</div>

	<div class="form-group">
		{!! Form::text('adresa', null, ['placeholder' => 'Adresa completa']) !!}
	</div>

	<div class="form-group">
		{!! Form::email('email', null, ['placeholder' => 'Email']) !!}
	</div>

	<div class="form-group">
		{!! Form::input('file', 'photo', null, ['placeholder' => 'Poza']) !!}
	</div>

	<div id="form-submit">
		{!! Form::submit('Submit') !!}
	</div>

{!! Form::close() !!}

@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
	</ul>
@endif

@stop