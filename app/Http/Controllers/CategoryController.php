<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return View('welcome',compact('category'));
    }
    public function show(string $slug)
    {
        $cat = Category::with('articles')->where('slug', $slug)->firstOrFail();
        return view('CategoryShow', compact('cat'));
    }
    public function article(string $slug){
        $article =Article::where('slug', $slug)->firstOrFail();
        return view('ArticleShow', compact('article'));
    }
    public function about(){
        return view('About');
    }
}
