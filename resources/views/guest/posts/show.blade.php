@extends('layouts.guest')

@section('pageContent')
	<div class="row">
	<div class="col-md-8 blog-main">
		<h1 class="blog-post-title">{{$post['title']}}</h1>
		<p class="blog-post-meta">{{$post->created_at->diffForHumans()}} <a href="#">Jacob</a></p>
		{{-- @if($post['tags'])
			<p>
				@foreach ($post["tags"] as $tag)
					<span class="badge badge-primary">{{$tag["name"]}}</span>
				@endforeach
			</p> --}}
		{{-- @endif --}}

		{{-- @if ($post["category"])
			<h4>
				Categoria: <a href="{{route("categories.show", $post["category"]["slug"])}}">{{$post["category"]["name"]}}</a>
			</h4>
		@endif --}}
		<p>
			{{$post['content']}}
		</p>
	</div><!-- /.blog-main -->

	<aside class="col-md-4 blog-sidebar">
		<div class="p-3 mb-3 bg-light rounded">
		<h4 class="font-italic">About</h4>
		<p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		</div>

		<div class="p-3">
		<h4 class="font-italic">Archives</h4>
		<ol class="list-unstyled mb-0">
			<li><a href="#">March 2014</a></li>
			<li><a href="#">February 2014</a></li>
			<li><a href="#">January 2014</a></li>
		</ol>
		</div>

		<div class="p-3">
		<h4 class="font-italic">Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">GitHub</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ol>
		</div>
	</aside><!-- /.blog-sidebar -->

	</div><!-- /.row -->
@endsection