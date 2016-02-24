@extends('layouts.book')
@section('main')
<h1>Edit Book</h1>
{{ Form::model($book, array('method' => 'PATCH', 
'route' =>array('books.update', $book->id))) }}
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
        {{ Form::submit('Update', array('class' => 
                 'btn btn-warning'))}}
        {{ link_to_route('books.show', 'Cancel', $book->
                  id,array('class' => 'btn btn-danger')) }}
    </li>
</ul>
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{implode('',$errors->all('<li class="error">:message</li>'))}}
</ul>
@endif
@stop