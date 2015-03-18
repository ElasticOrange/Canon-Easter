@extends('entry.master')

@section('content')
<form action="/entry" enctype="multipart/form-data" method="post">
    <input type="text"  value="{{ old('nume') }}" name="nume" class="form-control" placeholder="Nume Prenume">

	<input type="tel" value="{{ old('telefon') }}" name="telefon" class="form-control" placeholder="Telefon">

	<input type="text" value="{{ old('adresa') }}" name="adresa" class="form-control" placeholder="Adresa de livrare">

	<input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Adresa de mail">
    
    <div class="photo_pic">
        <img src="/img/photo_pic.png" />
    </div>
    
    <label for="inputphoto"><input class="form-control" placeholder="Fotografie bon/factura"></label>
    <input type="file" class="pitit" name="photo" id="inputphoto">
	
	<button type="submit" class="btn-trimite">Trimite</button>
</form>

@if ($errors->any())
	<ul class="alerta-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
	</ul>
@endif

@stop