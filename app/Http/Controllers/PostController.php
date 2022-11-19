<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view("posts.post");
     }

    /**
     * @return void
     */
     public function getPosts(){
        $posts = Post::all();
        $post = Post::find(1);
        dd($posts);

     }
}
