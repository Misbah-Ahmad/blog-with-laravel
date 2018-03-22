<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagController extends Controller
{

	public function filter(Tag $tag)
	{

		$posts = $tag->posts;

		return view('posts.index', compact('posts'));

	}

}
