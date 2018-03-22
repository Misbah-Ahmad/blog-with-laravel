<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Post;

class CommentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store(Post $post)
	{
		
		$this->validate(request(), [
			
			'body' => 'required'
		]);


		$comment = new Comment;

		$comment->body = request('body');

		$comment->post_id = $post->id;


		auth()->user()->publishComment($comment);

		return back();

	}
    

}
