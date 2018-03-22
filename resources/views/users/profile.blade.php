@extends('layouts.master')


@section('content')


		<div class="profile-center">
		
			<div class="user-profile">
			
				<div class="user-profile-contents">
			

					<div class="user-profile-info">
			
						<h3>{{ $user->name }}</h3>
						
						<p>{{ $user->email }}</p>
						
						@if(Auth::check() && Auth::user()->id == $user->id)
							<p>
								<a href="/posts/create">Create Post</a>
								
							</p>
						@endif

					</div>


				</div>

				<h2 class="section-headline">Posts by {{ $user->name }}</h2>

				<hr>

				<!-- Single Post Starts Here -->

				@foreach($posts as $post)

					@include('layouts.single')

				@endforeach

			</div>

		</div>

	</div>


@endsection
