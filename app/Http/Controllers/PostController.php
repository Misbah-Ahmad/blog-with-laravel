<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Post;

use App\Tag;


use App\Policies\PostPolicy;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{

	public function __construct()
	{
		
        $this->middleware('auth')->except(['index', 'show']);
	
    }

    public function index()
    {

        //$posts = Post::latest()->get();

//        $posts = Post::latest()->simplePaginate(5);


        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));

    }


    public function create()
    {
    	
    	return view('posts.create');

    }



    public function store()
    {


    	$this->validate(request(), [

    		'title' => 'required',

    		'body' => 'required'

    	]);

        $post = new Post;

    	$post = auth()->user()->publish(new Post(request(['title', 'body'])));

        if(count(request('tag'))){
            
            $post->storeTags(request('tag'));
        }

    	return redirect()->home();

    }


    public function show(Post $post)
    {

        return view('posts.show', compact('post'));

    }






    public function edit(Post $post)
    {

        $postPolicy = new PostPolicy;


        if($postPolicy->update(auth()->user(), $post)){

            return view('posts.edit', compact('post'));

        } else {

            return redirect()->home();

        }

    }


    public function update(Post $post, PostRequest $request)
    {
        
                

            $post->title = request('title');

            $post->body = request('body');

            $post->save();

            return redirect('/posts/'.$post->id);

    }




}
