@extends('app')

@section('pagename')
Login page
@stop

@section('header')
<h4>Enter your username and password to login.</h4>
@stop

<!--
<form method="post" action="/userInfo">
Username:
<input type="text" name="username">
<br>Password:
<input type="password" name="password">
<br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="submit">
</form>
-->
@section('content')
{!! Form::open(['url'=>'/userInfo']) !!}

	{!! Form::label('username','Username:') !!}
	{!! Form::text('username',null) !!}
<br>
	{!! Form::label('password','Password:') !!}
	{!! Form::password('password',null) !!}
<br>
	{!! Form::submit('Log In') !!}

{!! Form::close() !!}
@stop

@section('footer')
<br><br>
<h4>Do not have an account?? <a href='register'>register</a> then, it's FREE!!!!
@stop