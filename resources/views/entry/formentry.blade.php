@extends('entry.master')

@section('content')
<h1>Toate campurile sunt obligatorii</h1><br />

<form action="/entry" enctype="multipart/form-data" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-xs-5">
			<input type="text" name="nume" class="form-control" placeholder="Nume">
		</div>

		<div class="col-xs-7">
			<input type="text" name="prenume" class="form-control" placeholder="Prenume">
		</div>
	</div><br>

	<input type="tel" name="telefon" class="form-control" placeholder="Telefon"><br>

	<input type="text" name="adresa" class="form-control" placeholder="Adresa completa: Judet, Localitate, Strada, Numar, Bloc, Scara, Apartament"><br>

	<input type="email" name="email" class="form-control" placeholder="Email"><br>


	<div class="form-group">
		<label for="exampleInputFile">Atasati poza bonului de casa</label>
		<input type="file" name="photo" id="exampleInputFile">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
@stop