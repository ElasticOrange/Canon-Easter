@extends('entry.master')

@section('content')
<form action="/entry" enctype="multipart/form-data" data-form="true" method="post">
    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="form-control" placeholder="Nume Prenume">

	<input type="tel" value="{{ old('telefon') }}" data-telefon="true" name="telefon" class="form-control" placeholder="Telefon">

	<input type="text" value="{{ old('adresa') }}" data-adresa="true" name="adresa" class="form-control" placeholder="Adresa de livrare">

	<input type="email" value="{{ old('email') }}" data-email="true" name="email" class="form-control" placeholder="Adresa de mail">
    
    <div class="photo_pic">
        <img src="/img/photo_pic.png" />
    </div>
    
    <label for="inputphoto"><input class="form-control" data-photo2="true" placeholder="Fotografie bon/factura"></label>
    <input type="file" data-photo="true" class="pitit" name="photo" id="inputphoto">
	
	<button type="submit" data-buton="true" class="btn-trimite">Trimite</button>
</form>

@section('js')
<script src="/js/entry/form.js"></script>
@stop
@stop