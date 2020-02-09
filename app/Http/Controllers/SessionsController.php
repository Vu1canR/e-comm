<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    
	public function __construct(){
		
		$this->middleware('guest');
	}

	public function showLoginForm(){
		
		return view('sessions.login');

	}

	public function login(){

		if (!auth()->attempt(request(['email', 'password']))){

			return back();
		}

		return redirect('/welcome');
		
	}

	public function logout(){
		
		auth()->logout();
		return redirect('/welcome');

	}

	public function resetEmail(){
		
	}

}

