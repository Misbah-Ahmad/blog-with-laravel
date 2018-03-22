<!-- Sidebar Starts here -->

<div id="blog-part-right">

	<div class="sidebar">
		
		<h3>Tags</h3>

			<ul class="sidebar-ul">
		
				@foreach($tags as $tag)

					<li>

						<a href="/posts/tag/{{$tag->name}}">{{ $tag->name }}</a>

					</li>

				@endforeach

			</ul>

	</div>

</div>
<!-- Sidebar Ends Here -->
