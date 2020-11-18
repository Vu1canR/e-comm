<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{

	public function store(Product $product){
		try{

			$userId = Auth::id();
			$product->addComment(request('body'), $userId, $product->id);
		}
		catch(Exception $e){
			$e->getMessage();
		}

		return back();
	}

}
