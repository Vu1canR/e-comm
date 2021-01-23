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


Route::group(['middleware' => ['auth']], function(){
    Route::get('/about', function () {return view('about');});

    Route::get('/welcome', 'ProductController@homeProducts');

    // Route::group(['middleware' => ['admin']], function(){
    //     Route::get('/admin', function () {return view('admin');});
    //     Route::get('/welcome', 'ProductController@homeProducts');
    // });
});

Route::get('/welcome', 'ProductController@homeProducts')->name('welcome');


Route::get('/add', 'ProductController@create');
Route::post('/add', 'ProductController@store');



Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'SessionsController@showLoginForm');
Route::post('/login', 'SessionsController@login')->name('login');
Route::get('/logout', 'SessionsController@logout');

// Route::post('/search', 'ProductController@search');
// Route::post('/api/search', 'ProductController@axiosSearch');

// Route::get('/c/{category}', 'CategoriesController@show');


Route::get('/about', function () {

    return view('about');
});


// Route::get('/cat', 'CategoriesController@showSubCategories');

// Route::post('/p/{store_code}-{product}', 'CommentsController@store');
// Route::put('/p/comment-update', 'CommentsController@update');
// Route::get('/p/{store_code}-{product}', 'ProductController@show');
// Route::get('/c-{catId}/{subcatId}-{subcat}', 'ProductController@showAll');

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/usersoders', 'UserController@index');

// Route::get('/cart', 'OrderController@showCart');
// Route::post('/cart', 'OrderController@store');
// Route::get('/track', 'OrderController@track');
// Route::put('/track/{orderId}', 'OrderController@confirmation');
// Route::get('/profile/{userId}', 'SessionsController@showProfile');
// Route::post('/profile/{order}', 'OrderController@cancelOrder');
