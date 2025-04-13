<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function view(){
        $category= Category::count();
        $article=Article::count();
        $user=User::count();
        return view('Admin.dashboard',compact('category','article','user'));
    }
    
}
