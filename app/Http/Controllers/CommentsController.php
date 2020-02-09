<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $p){

    	$this->validate(request(), ['body' => 'required|min:2']);
    	$p->addComment(request('body'));

    	return back();
    }
}
