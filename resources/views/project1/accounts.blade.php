@extends('app')

@section('pagename')
	User accounts
@stop

@section('content')
<h2>Accounts:</h2>

@foreach($accounts as $account)
<article>
	<h3><a href="{{ url('/accounts',$account->username) }}">{{ $account->username }}</a></h3>
	<div class="body">{{ $account->occupation }}</div>
</article>

@endforeach
@stop
