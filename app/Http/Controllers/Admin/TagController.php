<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy("id", "desc")->paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

        /* 
        *   запись в бд с fillable в моделе 
        */
        Tag::create($request->all());


        /* 
        *   запись в бд без fillable в моделе 
        */
        // $tag = new Category();
        // $tag->title = $request->title;
        // $tag->save();

        return redirect(route('tags.index'))->with('flash_message', 'tag added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Tag::find($id);
        // dd($data);
        return view('admin.tags.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);



        $tag = Tag::find($id);



        if (isset($request->checkSlug)) {

        /*
         *  при обновлении slug не меняется, но если так нужно, то пропиши
         *  $category ->slug = null; 
        */
            $tag->slug = null;
        }



        $tag->update($request->all());

        return redirect(route('tags.index'))->with('flash_message', 'tag updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Tag::destroy($id);
        // return Redirect::back()->with('flash_message', 'tag deleted!');

        
        $tag = Tag::find($id);
        if ($tag->posts->count()) {
            return redirect()->route('tags.index')->with('error', 'Ошибка! данный тег привязан к Посту');
        }
        $tag->destroy($id);
        return redirect()->route('tags.index')->with('flash_message', 'Тег удален');
    }
}
