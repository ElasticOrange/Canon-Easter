@extends('admin.layout.master')

@section('content')
<h2>Sunt listati castigatorii</h2>
<hr/><br>
<div class="row">
        <div class="col-md-12">
            @if($entries->count())
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Info</th>
                        <th>Adresa</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                    <tr data-id="{{ $entry->id }}">
                        <td>
                            <strong>Data inscriere: </strong>{{ $entry->created_at->format('d-m-Y h:ia') }}<br>
                            <strong>Name: </strong>{{ $entry->nume }}<br>
                            <strong>Prenume: </strong>{{ $entry->prenume }}<br>
                        </td>
                        <td>
                            <strong>Telefon: </strong>{{ $entry->telefon }}<br>
                            <strong>Email: </strong>{{ $entry->email }}<br>
                            <strong>Adresa: </strong>{{ $entry->adresa }}
                        </td>
                        <td width="300">
                                <img src="{{ action('Admin\AdminEntryController@getImage', $entry->id)  }}" class="img-rounded" width="200" />
                        </td>
                        <td>
                            <input type="hidden" name="_token" data-hidden="true" value="{{ csrf_token() }}">
                            <form action="/admin/entry/aprobat" method="put" data-form_approve="true">
                                <input type="hidden" name="id" value="{{ $entry->id }}" />
                                <input type="submit" value="Disapprove" class="btn btn-inverse"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>Unfortunately, there are no entries to be approved.</p>
            @endif
        </div>
    </div>
@section('js')
<script src="/js/admin/entry/index.js"></script>
@stop
@stop