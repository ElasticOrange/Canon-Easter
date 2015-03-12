@extends('entry.master')

@section('content')

<h1>Pagina de concurs</h1>

<hr>

{!! Form::open(['enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{!! Form::label('nume', 'Nume:') !!}
		{!! Form::text('nume', null, ['class' => 'form-control', 'placeholder' => 'Nume si Prenume']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('telefon', 'Telefon:') !!}
		{!! Form::text('telefon', null, ['class' => 'form-control', 'placeholder' => 'Telefon']) !!} 
	</div>

	<div class="form-group">
		{!! Form::label('adresa', 'Adresa completa:') !!}
		{!! Form::text('adresa', null, ['class' => 'form-control', 'placeholder' => 'Adresa completa']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('photo', 'Atasati poza bonului de casa') !!}
		{!! Form::input('file', 'photo', null, ['placeholder' => 'Poza']) !!}
	</div>

	<div class="form-group col-md-1">
		{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
	</div>

{!! Form::close() !!}

<div class="container">
@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
	</ul>
@endif
</div>

@stop