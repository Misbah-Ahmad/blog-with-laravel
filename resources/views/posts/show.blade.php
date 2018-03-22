@extends('layouts.master')


@section('content')

	<div id="blog-part-left blog-post-detail">

		<div class="blog-post">

			<h3 class="blog-post-detail-head">{{ $post->title }}</h3>
			
			<p class="blog-post-author">
				
				{{$post->created_at->diffForHumans().' by'}}

				<a href="/users/{{$post->user->id}}"> {{ $post->user->name }} </a>
			
			</p>

			@if(count($tags = $post->tags()->get()))
			
				<p>Tags: 
					
					@foreach($tags as $tag)
					
						<a href="/posts/tag/{{$tag->name}}">{{ $tag->name }}</a> 
					
					@endforeach
				
				</p>		
			
			@endif

			<p class="blog-post-long blog-post-style">
			
				{{ $post->body }} 
				
				@if(Auth::check() && Auth::user()->id == $post->user->id)
					
					<br>
					(<a href="/posts/{{$post->id}}/edit">Edit Post</a>)

				@endif

			</p>
			

		<div class="comment">
			
			@include('layouts.comments')

		</div>



		</div>



	</div>


@endsection