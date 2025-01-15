<?php

namespace App\Http\Controllers;
// menginfort post
use App\Models\Post;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    // index disini iyalah method
    public function index()
    {
        //get all posts from Model
        // didalamnya melakukan get data posts dari model
        $posts = Post::latest()->get();

        //passing posts to view
        // kemudian datanya dikirim ke view menggunakan helper compact
        return view('posts', compact('posts'));
    }
}