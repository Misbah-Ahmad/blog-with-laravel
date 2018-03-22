
			<div class="show-comment">
				<h4>Comments:</h4>

				@foreach($post->comments()->latest()->get() as $comment)
					<div class="single-comment">
					
						<p class="comment-text"> 

							{{ $comment->body }} 
						
						</p>
						
						<div class="commentor">					
							<a href="/users/{{$comment->user_id}}" style="text-decoration: none;"> {{ $comment->user->name }} </a>  
							
							on {{ $comment->created_at->toDateTimeString() }}

						</div>

					</div>

				@endforeach

			</div>
			<br>

			<div class="write-comment">
				
				<form method="POST" action="/posts/{{$post->id}}/create">
					
					{{ csrf_field() }}

					<input type="text" class="comment-input" name="body" placeholder="Write a comment">

					<input type="submit" name="submit" value="Add" class="comment-btn">

				</form>

			</div>