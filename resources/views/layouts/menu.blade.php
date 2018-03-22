		
		<!-- Main Menu Starts Here -->
			
			<ul class="main-menu-ul">
				<li><a href="/">Billboard</a></li>
				
				<li><a href="/" class="active-menu">Home</a></li>

				@if(!Auth::check())
				
					<li ><a href="/register">Register</a></li>
				
				@endif

				@if(Auth::check())

					<li><a href="/users/{{Auth::user()->id}}">{{ Auth::user()->name }}</a></li>
				
					<li ><a href="/posts/create">Create Post</a></li>

					<li>
						<a href="/logout" > Logout </a>
					</li>


				
				@else

					<li ><a href="/login">Login</a></li>	

				@endif



				<li><a href="#footer-link">Contact Us</a></li>
				
				<li><a href="#footer-link">About</a></li>	
				

			</ul>
		</div>


