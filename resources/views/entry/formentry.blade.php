@extends('entry.master')

@section('content')
<form action="/entry" enctype="multipart/form-data" data-form="true "method="post">
    <input type="text" name="nume" class="form-control" placeholder="Nume">

	<input type="tel" name="telefon" class="form-control" placeholder="Telefon">

	<input type="text" name="adresa" class="form-control" placeholder="Adresa">

	<input type="email" name="email" class="form-control" placeholder="Email">
    
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

<!-- @section('js')
<script src="/js/entry/form.js"></script>
@stop -->

@stop