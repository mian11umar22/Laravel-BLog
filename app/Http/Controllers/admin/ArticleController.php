<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles= Article::all();
        return view('admin.Article',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('Admin.ArticleAdd',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
        'title'=>'required',
        'shortcontent'=>'required',
        'longcontent'=>'required',
        'category_id'=>'required'
     ]);
     $art=Article::create([
        'title'=>$request->title,
        'shortcontent'=>$request->shortcontent,
        'longcontent'=>$request->longcontent,
        'category_id'=>$request->category_id,
        'slug'=>Str::slug($request->title),
     ]);
     if($art){
        return redirect()->route('art.index')->with('success','New Article Added');
     }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('Admin.ArticleUpdate',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
      $art=$article->update([
           'title'=>$request->title,
        'shortcontent'=>$request->shortcontent,
        'longcontent'=>$request->longcontent,
        'category_id'=>$request->category_id,
        'slug'=>$request->slug,
        ]);
        if($art){
            return redirect()->route('art.index')->with('success',' Article Updted');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
       $art= $article->delete();
       if($art){
        return redirect()->route('art.index')->with('success',' Article Deleted');
     }
    }
     
}
