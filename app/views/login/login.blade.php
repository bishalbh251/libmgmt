<!-- @extends('index')
@section('content')
	{{ Form::open(['url' => 'login']) }}
	    UserName:
	    {{ Form::text('username') }}
	    Password:
	    {{ Form::password('password') }}
	    {{ Form::submit('Login') }}
	{{ Form::close() }}
	@stop
 -->

 <<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="heading">
 <h1>Please Log In to Continue</h1>
 </div>
 {{ Form::open(array('url' => url('login'), 'class'=>'form' )) }}

                <p>
                    {{ Form::label('User Name:') }}<br>
                    {{ Form::text('username'); }}
                </p>

                <p> 
                    {{ Form::label('Password:') }}<br>
                    {{ Form::password('password'); }}
                </p>
                {{ Form::submit('Log In'); }}
                            {{ Form::close() }}

<a href="/register">Sign Up </a>
 </body>
 </html>
	