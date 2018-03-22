<?php



use App\User;

use App\Post;

use App\Http\Resources\User as UserResource;

use App\Http\Resources\UserCollection;

use App\Http\Resources\Post as PostResource;

use App\Http\Resources\PostCollection;



Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/register', 'UserController@index');

Route::post('/register', 'UserController@store');

Route::get('/login', 'SessionController@index');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');

Route::get('/users/{user}', 'UserController@show');

Route::get('/posts/tag/{tag}', 'TagController@filter');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/create', 'CommentController@store');

Route::get('/posts/{post}/edit', 'PostController@edit');

Route::post('/posts/{post}/update', 'PostController@update');

Route::resource('files', 'FileController');




//API ROUTE 
Route::get('/api/users/{user}', function($user){

	return  new UserResource(User::find($user));

});


Route::get('/api/users', function(){

	return  new UserCollection(User::all());

});


Route::get('/api/posts/{post}', function($post){

	return  new PostResource(Post::find($post));

});


Route::get('/api/posts', function(){

	return new PostCollection(Post::all());

});


