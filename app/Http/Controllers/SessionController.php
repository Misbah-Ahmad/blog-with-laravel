<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

class SessionController extends Controller
{

	function __construct()
	{

		$this->middleware('guest')->except(['destroy']);

		$this->middleware('auth')->except(['index', 'store']);
	
	}
    
	public function index()
	{
			
		return view('sessions.create');

	}

	public function store(LoginRequest $reqest)
	{
			
		if( !(auth()->attempt(request(['email', 'password']))) ) {

			return back()->withErrors([

				'message' => 'Invalid Email or Password',

			]);

		}

			//dd(redirect()->intended());
			return redirect()->intended();//->back();

	}


	public function destroy()
	{
		
		auth()->logout();

		return redirect()->home();

	}



}
