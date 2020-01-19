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
Route::get('/posts/{post}', function($post) {
    $posts = [
        'my-first-post' => 'This is the first post',
        'my-second-post' => 'This is the second post'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Post no founded!');
    }

    return view('test', [
        'post' => $posts[$post]
    ]);
});