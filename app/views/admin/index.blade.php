@extends('layouts.master')

@section('content')

<div class="span10 well">
	<h4>Hello {{ ucwords(Auth::user()->username) }}</h4>
</div>

@stop