@extends('layouts.master')

@section('content')

<!-- {{ Form::model($post, array('method' => 'PATCH', )) }} -->
{{ Form::model($post, array('method' => 'PUT', 'route'=>array('posts.update', $post->id))) }}

<ul>
	<li>
		{{ Form::label('author', 'Author:') }}
		{{ Form::text('author') }}
	</li>
	<li>
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title') }}
	</li>
	<li>
		{{ Form::label('body', 'Body:') }}
		{{ Form::textarea('body') }}		
	</li>
	<li>
		{{ Form::submit('Update', array('class'=>'btn btn-success')) }}
		<a href="" data-dismiss="modal" class="btn btn-warning">Cancel</a>
		<!-- {{ link_to_route('posts.show', 'Cancel', $post->id, array('class'=>'btn btn-warning')) }} -->
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop