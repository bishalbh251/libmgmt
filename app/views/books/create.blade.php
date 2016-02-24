@extends('layouts.book')
@section('main')
<h1>Add Book</h1>
{{ Form::open(array('route' => 'books.store')) }}
<ul>
    <li>
        {{ Form::label('ISBN', 'ISBN:') }}
        {{ Form::text('isbn') }}
    </li>
    <li>
        {{ Form::label('Title', 'Title:') }}
        {{ Form::text('title') }}
    </li>
    <li>
        {{ Form::label('Author', 'Author:') }}
        {{ Form::text('author') }}
    </li>
    <li>
        {{ Form::label('Publisher', 'Publisher:') }}
        {{ Form::text('publisher') }}
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