<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create(){

		return view('registration.register');

}

	public function store(){
		
		$this->validate(request(), [

		'name' => 'required',
		'email' => 'required|email',
		'password' => 'required|confirmed',

		]);

		// if($user->email->exists()){
		// 	return redirect('/email-exist');
		// }
		try {
			$user = User::create(request(['name', 'email', 'password']));
		}catch( \Illuminate\Database\QueryException $e) {

			$emessage = $e->getMessage();

			return view('email-exist', compact('emessage'));

		}
		auth()->login($user);

		return redirect('/welcome');

}

}

