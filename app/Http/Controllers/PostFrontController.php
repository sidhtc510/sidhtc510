<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostFrontController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(6);
        return view('frontEndViews.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();

        return view('frontEndViews.single', compact('post'));
    }
}
