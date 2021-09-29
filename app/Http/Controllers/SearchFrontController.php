<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchFrontController extends Controller
{
    public function index(Request $request){
        $request->validate([
            's'=>'required'
        ]);

        $s = $request->s;


        // стандартный запрос для поиска
        // $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->orderBy('views', 'desc')->paginate(2);

        // запрос поиска с помощью метода scopeLike (в моделе post)
        $posts = Post::like($s)->with('category')->orderBy('views', 'desc')->paginate(2);
        
        return view('frontEndViews.search', compact('s', 'posts'));
    }
}
