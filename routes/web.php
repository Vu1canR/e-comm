<?php

use App\Comment;
use App\graphics;
use App\graphics_cards;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Route::get('/create', 'Person@index');
Route::post('/create', 'Person@store');
// Route::get('/home', 'PostsController@index');
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
// Route::post('/posts', 'ProductController@show');
// Route::get('/posts/{post}', 'PostsController@show');

// Route::get('/home', 'HomeController@index');
Route::get('/product', function () {
    return view('product');
});

Route::get('/welcome', 'ProductController@homeProducts');

Route::post('/category/id', 'ProductController@getid');
Route::post('/c4/gpus', 'ProductController@show');
Route::get('/add', 'ProductController@create');
Route::post('/add', 'ProductController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'SessionsController@showLoginForm');
Route::post('/login', 'SessionsController@login');
Route::get('/logout', 'SessionsController@logout');

Route::post('/search', 'ProductController@search');
Route::post('/api/search', 'ProductController@axiosSearch');

Route::get('/c/{category}', 'CategoriesController@show');


Route::get('/about', function () {

    return view('about');
});


Route::get('/cat', 'CategoriesController@showSubCategories');

Route::post('/gpus/{product}', 'CommentsController@store');
Route::get('/p/{store_code}-{product}', 'ProductController@show');
Route::get('/c-{catId}/{subCatId}-{subcat}', 'ProductController@showAll');

Route::get('/gpus', function () {
    $products = App\graphics_cards::all();
    return view('products', compact('products'));
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/usersoders', 'UserController@index');

Route::get('/cart', 'OrderController@showCart');
Route::post('/cart', 'OrderController@store');
Route::get('/track', 'OrderController@track');
Route::put('/track/{orderId}', 'OrderController@confirmation');
Route::get('/profile/{userId}', 'SessionsController@showProfile');
Route::post('/profile/{order}', 'OrderController@cancelOrder');
// Route::patch('/cart', 'OrderController@update');