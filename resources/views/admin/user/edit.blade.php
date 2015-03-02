@extends('admin.layout.master')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-user'></i> Editeaza User</h1>
 
    {!! Form::model($user, ['role' => 'form', 'url' => '/admin/user/' . $user->_id, 'method' => 'PUT']) !!}
 
    <div class='form-group'>
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::label('password_confirmation', 'Password') !!}
        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'data-password' => 'true']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['placeholder' => 'Password', 'class' => 'form-control', 'data-password_confirm' => 'true']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::submit('Adauga User', ['class' => 'btn btn-primary', 'data-buton' => 'true']) !!}
    </div>
 
    {!! Form::close() !!}
 
</div>
@stop