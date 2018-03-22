<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\RegistrationRequest;


class UserController extends Controller
{
    

	function __construct()
	{
		$this->middleware('guest')->except(['show']);
	}



	public function index()
	{
		
		return view('users.register');

	}


	public function store(RegistrationRequest $request)
	{

		$user  = User::create([
			
			'name' => request('name'),

			'email' => request('email'),

			'password' => Hash::make(request('password')),

			'gender' => request('gender')		
		]);


		auth()->login($user);

		return redirect()->home();		

	}


	public function show(User $user)
	{
		
		//$user = App\User::findOrFail($id);

		$posts = $user->posts()->get();

		return view('users.profile', compact('user', 'posts'));

	}

}
