<?php


Route::get('/home', 'PostsController@index');
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{p}/comments', 'CommentsController@store');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/product', function () {
    return view('product');
});
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@showLoginForm');
Route::post('/login', 'SessionsController@login');
Route::post('/logout', 'SessionsController@logout');

Route::get('/products', function () {
    return view('products');
});



