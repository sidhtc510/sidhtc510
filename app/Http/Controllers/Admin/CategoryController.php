<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy("id", "desc")->paginate(6);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();
        $categories = Category::whereNull('category_id')->get();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            // 'category_id' => 'required',
        ]);

        /* 
        *   запись в бд с fillable в моделе 
        */
        Category::create($request->all());


        /* 
        *   запись в бд без fillable в моделе 
        */
        // $tag = new Category();
        // $tag->title = $request->title;
        // $tag->save();

        return redirect(route('categories.index'))->with('flash_message', 'Category added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Category::find($id);

        return view('admin.categories.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $category = Category::find($id);

        $category = Category::with('parentCategory')->find($id); /*достаем родительскую категорию по отношению к дочерней (id дочерней категории) */
        $nullCategories = Category::whereNull('category_id')->get(); /* достаем Только родительскте категории (все что равно null)*/


        return view('admin.categories.edit', compact('category', 'nullCategories'));
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



        $category = Category::find($id);



        if (isset($request->checkSlug)) {

            /*
         *  при обновлении slug не меняется, но если так нужно, то пропиши
         *  $category ->slug = null; 
        */
            $category->slug = null;
        }



        $category->update($request->all());

        return redirect(route('categories.index'))->with('flash_message', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::find($id);
        if ($category->posts->count()) {
            return redirect()->route('categories.index')->with('error', 'Ошибка! Категория привязана к Посту');
        }

        if ($category->childrenCategories->count()) {
            return redirect()->route('categories.index')->with('error', 'Ошибка! Это родительская категория и у нее есть дочернии категории"');
        }


        $category->delete();
        return redirect()->route('categories.index')->with('flash_message', 'Категория удалена');
    }
}
