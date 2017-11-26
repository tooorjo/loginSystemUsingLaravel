@extends('app')

@section('pagename')
Registration page
@stop

@section('header')
<h4>Please fill up the given form:</h4>
@stop
<!--
<form method="post"  action="/project1">
Username:
<input type="text" name="username">
<br>Password:
<input type="password" name="password">
<br>Occupation:
<input type="text" name="occupation">
<br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="submit">
</form>
-->
@section('content')
{!! Form::open(['url'=>'/project1']) !!}

	{!! Form::label('username','Username:') !!}
	{!! Form::text('username',null) !!}
<br>
	{!! Form::label('password','Password:') !!}
	{!! Form::password('password',null) !!}
<br>
	{!! Form::label('occupation','Occupation:') !!}
	{!! Form::text('occupation',null) !!}
<br>
	{!! Form::submit('Register') !!}

{!! Form::close() !!}
@stop

@section('footer')
<br><br>
<h4>Already have an account?? <a href='project1'>login</a> here.
@stop