

	<div class="blog-post" id="blog-post-first">

		<h3 class="blog-post-head">{{ $post->title }}</h3>
		
		<p class="blog-post-author">Posted by 
		
			<a href="/users/{{$post->user->id}}"> {{ $post->user->name }} </a>
		
		</p>

		@if(count($tags = $post->tags()->get()))
		
			<p class="blog-post-short">Tags: 
				
				@foreach($tags as $tag)
					<a href="{{ URL::to('posts/tag/'.$tag->name) }}">{{ $tag->name }}</a> 
				@endforeach
			
			</p>		
		
		@endif

		<p class="blog-post-short blog-post-style"> {{ $post->body_short.'...' }} </p>

		<span class="read-more-btn"><a href="/posts/{{$post->id}}">Read More</a></span>
		
		<hr>
	
	</div>
