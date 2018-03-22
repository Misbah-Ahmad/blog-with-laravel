@extends('layouts.master')


@section('content')

	<div class="login-form register-form">

		<h2>Login</h2>

		<form method="POST" action="/login">

			{{ csrf_field() }}

			<p>
			
				<input class="text-input" type="email" name="email" placeholder="Email" required>
			
			</p>

			
			<p>
			
				<input class="text-input" type="password" name="password" placeholder="Password" required>

			</p>

			
			<p>

				<input class="signup-btn login-btn" type="submit" name="submit" value="Login">

			</p>


		</form>

	</div>



@endsection