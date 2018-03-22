@extends('layouts.master')


@section('content')


	<div class="register-form">

		<h2>Create a Post</h2>
				
		<form method="POST" action="/posts">
			
			{{ csrf_field() }}


			<p>
				<input class="text-input" type="text" name="title" placeholder="Headline" required>
			</p>
		
			<p>
				<textarea rows="15" class="text-input" name="body" placeholder="Write Post" required></textarea>
			</p>
			


			<p class="Checkbox">Category:<br>
				<input type="checkbox" name="tag[]" value="1">Google
				
				<input type="checkbox" name="tag[]" value="2">Android
				
				<input type="checkbox" name="tag[]" value="3">iOS
				
				<input type="checkbox" name="tag[]" value="4">Windows

			</p>

			<p>
				<input class="signup-btn" type="submit" name="submit" value="Submit Post">
			</p>

		</form>


		@include('layouts.errors')
	
	</div>



@endsection