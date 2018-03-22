@extends('layouts.master')


@section('content')


	<div id="blog-part-left">

		<!-- Single Post Starts Here -->

		<!-- Loop Starts Here -->

		@foreach($posts as $post)

			@include('layouts.single')
		
		@endforeach

		<!-- Loop Ends Here -->


		<!-- Single Post Starts Here -->

		{{ $posts->appends(['sort' => 'likes'])->links() }}


	</div>

	@include('layouts.sidebar')

@endsection

