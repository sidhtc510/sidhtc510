<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagFrontController extends Controller
{
    public function show($slug){
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->with('category')->orderBy('id', 'desc')->paginate(4);
        return view('frontEndViews.tag', compact('tag', 'posts'));
    }
}
