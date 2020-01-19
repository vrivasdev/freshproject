<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) {
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
    }
}
