@extends('admin.layout.master')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
        
    <h1><i class='fa fa-user'></i> Adauga User</h1>
 
    {!! Form::open(['role' => 'form', 'url' => 'admin/user', 'data-form' => 'true']) !!}
 
    <div class='form-group'>
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control', 'data-username' => 'true']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'data-password' => 'true']) !!}
    </div>
    
    <div class='form-group'>
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['placeholder' => 'Password', 'class' => 'form-control', 'data-password_confirm' => 'true']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::submit('Adauga', ['class' => 'btn btn-primary', 'data-buton' => 'true']) !!}
    </div>
 
    {!! Form::close() !!}
 
</div>
<script src="/js/create.js"></script>

@stop