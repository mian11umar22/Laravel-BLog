<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
$query= $request->input('query');
$article=Article::where('title','LIKE',"%{$query}%")
                ->orWhere('shortcontent','LIKE',"%{$query}%")->get();
                return view('Result',compact('article','query'));
                
    }
}
