<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use App\Order;
use App\User;
use App\Product;

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
            return redirect()->back();
		}
		
		else
			return redirect('/welcome');
		// $products = Product::inRandomOrder()->limit(5)->get();

        // return view('/welcome', compact('products'));
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
		
		$user = User::find($userId);
		$orders = Order::where('user_id', $userId)->with('productsList')->get();
		return view('profile', compact('orders', 'user'));
	}

}

