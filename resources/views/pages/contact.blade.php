@extends('app')
@section('content')
<h1>contact me</h1>
<h3>if you like:</h3>
<ul>
@foreach($animal as $person)
	<li>{{$person}}</li>
</ul>
@endforeach
@stop
@section('footer')
<script>alert('there are dark forces.');</script>
@stop
