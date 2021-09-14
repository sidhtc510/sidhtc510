<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function destroyImg(Request $request)
    {
        $post = Post::find($request->id);

        Storage::delete($post->thumbnail);

        $post->thumbnail = Null;
        $post->save();

        return redirect(route('posts.edit', $post->id))->with('flash_message', 'image deleted!');
    }





    public function index()
    {
        $posts = Post::orderBy("id", "desc")->with('category', 'tags')->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }





    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }





    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Post::uploadImage($request);

        $post = Post::create($data);

        $post->tags()->sync($request->tags);

        return redirect(route('posts.index'))->with('flash_message', 'post added!');
    }





    public function show($id)
    {

        $data = Post::find($id);
        // dd($data);
        return view('admin.posts.show', compact('data'));
    }





    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }





    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
        ]);

        $post = Post::find($id);
        $data = $request->all();

        $data['thumbnail'] = Post::uploadImage($request, $post->thumbnail);

        $post->update($data);

        $post->tags()->sync($request->tags);

        return redirect(route('posts.index'))->with('flash_message', 'post updated!');
    }





    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->sync([]);
        Storage::delete($post->thumbnail);

        Post::destroy($id);

        return Redirect::back()->with('flash_message', 'post deleted!');
    }
}
