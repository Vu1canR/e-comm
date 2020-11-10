<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    // public function store(Post $p){

    // 	$this->validate(request(), ['body' => 'required|min:2']);
    // 	$p->addComment(request('body'));

    // 	return back();
	// }
	
	// public function store(Post $p){

    // 	$this->validate(request(), ['body' => 'required|min:2']);
    // 	$p->addComment(request('body'));

    // 	return back();
	// }
	public function store(Product $product){
		
		// $product_id = $request->id;
		// $product_id = Session::get('id');
		try{
			// $product = Product::find($id);
			$userId = Auth::id();
			$product->addComment(request('body'), $userId, $product->id);
		}
		catch(Exception $e){
			$e->getMessage();
		}

		return back();
	}

}
