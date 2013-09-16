@extends('layouts.master')

@section('content')

<h1>All Posts</h1>

<!-- <p>{{ link_to_route('posts.create', 'Add new Post', array(), array('class'=>'btn')) }}</p> -->

<p><a href="" data-toggle="modal" data-target="#modal-create-post" class="btn">Add new Post</a></p>

@if ($posts->count())
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Author</th>
				<th>Title</th>
				<th>Body</th>
			</tr>
		</thead>

		<tbody>
			@foreach($posts as $post)
			<tr>
				<td>{{ $post->author }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->body }}</td>
				<!-- <td>{{ link_to_route('posts.show', 'Show', array($post->id), array('class'=>'btn btn-primary')) }}</td> -->
				<!-- <td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-info')) }}</td> -->
				<td>{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-info', 'data-toggle'=>'modal', 'data-target'=>'#modal-edit-post')) }}</td>
				
				<!-- <td><button data-toggle="modal" data-target="#modal-edit-post" class="btn btn-info">Edit</button></td> -->
				<td>
					{{ Form::open(array('method'=>'DELETE', 'route' => array('posts.destroy', $post->id))) }}
						{{ Form::submit('Delete', array('class'=>'btn btn-danger')) }}
					{{ Form::close() }}	
				</td>
			</tr>
			@endforeach	
		</tbody>
	</table>
@else
	There are no posts
@endif

<div class="modal hide" id="modal-create-post">
	{{ Form::open(array('route'=>'posts.store', 'class'=>'form-horizontal')) }}

	<div class="modal-header">
		<button class="close" data-dismiss="modal">&times;</button>
		<h3>Create Post</h3>
	</div>
	
	<div class="modal-body">
		
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
				<!-- {{ Form::submit('Submit', array('class'=>'btn btn-info')) }} -->
			</li>
		</ul>
		
	</div>
	<div class="modal-footer">
		{{ Form::submit('Submit', array('class'=>'btn btn-info')) }}
		<a href="" data-dismiss="modal" class="btn">Cancel</a>
	</div>
	{{ Form::close() }}
</div>

<div class="modal hide" id="modal-edit-post">
	{{ Form::model($post, array('method' => 'PUT', 'route'=>array('posts.update', $post->id))) }}
	<div class="modal-header">
		<button class="close" data-dismiss="modal">&times;</button>
		<h3>Edit Post</h3>
	</div>
	<div class="modal-body">
		
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
		</ul>
		
	</div>
	<div class="modal-footer">
	<!-- {{ Form::submit('Update', array('class'=>'btn btn-success')) }} -->
		<!-- <a href="" data-dismiss="modal" class="btn">Cancel</a> -->
	</div>
	{{ Form::close() }}
</div>

@stop