@extends('admin.layout.master')

@section('content')
<h1>Lista de useri inscrisi:</h1><br />
@foreach($entries as $entry)
		<p>{{ $entry->nume }}</p>
@endforeach

@stop