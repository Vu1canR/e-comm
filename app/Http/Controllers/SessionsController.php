<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use App\Order;
use App\User;

class SessionsController extends Controller
{
    
	public function __construct(){
		
		// $this->middleware('guest', ['except' => 'logout']);
	}

	public function showLoginForm(){
		
		return view('sessions.login');

	}

		
	public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return "something is wrong";
        }
		return view('welcome');
    }

    

	public function logout()
	{
		
		try {
		    Auth::logout();
		    echo "logout successfully";
		    return redirect('/welcome');
			}
		catch(Exception $e){
		    echo "Connection failed: ". $e->getMessage();
		    }

	}

	public function showProfile($userId)
	{
		
		// $userId = Auth::id();
		$user = User::find($userId);
		$orders = Order::where('user_id', $userId)->with('productsList')->get();
		
		
		// return $orders;
		return view('profile', compact('orders', 'user'));
	}

}

