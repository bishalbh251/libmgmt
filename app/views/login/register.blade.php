@extends('layouts.book')
@section('main')
<h1>Add Details</h1>
{{ Form::open(array('url' => url('register'), 'class'=>'form' ))}}
<ul>
    <li>
        {{ Form::label('First Name', 'First Name:') }}
        {{ Form::text('fname') }}
    </li>
    <li>
        {{ Form::label('Last Name', 'Last Name:') }}
        {{ Form::text('lname') }}
    </li>
    <li>
        {{ Form::label('Username', 'Username:') }}
        {{ Form::text('username') }}
    </li>
    <li>
        {{ Form::label('Password', 'Password:') }}
        {{ Form::text('Password') }}
    </li>
    <li>
        {{ Form::label('Email', 'Email:') }}
        {{ Form::text('email') }}
    </li>

    <li>
        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    </li>
</ul>
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop