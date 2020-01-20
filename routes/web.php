<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('welcome');
});

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles', function(){
    return view('articles.index', [
        'articles' => App\Articles::latest()->get()
    ]);
});

Route::get('/articles/create', 'ArticlesController@create');