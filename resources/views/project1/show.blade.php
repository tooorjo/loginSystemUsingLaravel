@extends('app')

@section('content')

<article>
@foreach($account as $result)
@section('pagename')
{{$result['username']}}
@stop
	<h3>Name:{{$result['username']}}</h3>
	<p>Occupation:{{$result['occupation']}}</p>
@endforeach

</article>

@stop