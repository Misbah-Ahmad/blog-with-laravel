@extends('layouts.master')


@section('content')


	<div class="register-form">

		<h2>Create Your Profile</h2>

		<form method="POST" action="/register">

			{{ csrf_field() }}

			<p><input class="text-input" type="text" name="name" placeholder="Full Name" required></p>

			<p><input class="text-input" type="email" name="email" placeholder="Email" required></p>

			<p><input class="text-input" type="password" name="password" placeholder="Password" required></p>

			<p><input class="text-input" type="password" name="password_confirmation" placeholder="Confirm Password" required></p>

			<p class="radio-input" required>

				I am <input type="radio" name="gender" value="male">Male

				<input type="radio" name="gender" value="female">Female
			
			</p>
			
			<p>
			
				<input class="signup-btn" type="submit" name="submit" value="Signup">
			
			</p>
		
		</form>

		@include('layouts.errors')

	
	</div>



@endsection