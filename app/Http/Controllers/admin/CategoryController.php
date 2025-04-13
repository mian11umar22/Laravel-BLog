<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::withCount('articles')->get();
        return view('admin.category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.CategoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'emojis'=>'required',
           
        ]);
        
     $cat=   Category::create([
            'name'=>$request->name,
            'emojis'=>$request->emojis,
           'slug'=> Str::slug($request->name)
        ]);
        if($cat){
            return redirect()->route('cat.index')->with('success','New Catrgory Added');
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
        $category=Category::find($id);
        return view('admin.CategoryUpdate',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'emojis'=>'required'
        ]);
        $find =Category::find($id);
        $find->update([
            'name'=>$request->name,
            'emojis'=>$request->emojis,
            'slug'=>$request->slug
        ]);
        if($find){
            return redirect()->route('cat.index')->with('success',' Catrgory Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find= Category::find($id);
        $find->delete();
        if($find){
            return redirect()->route('cat.index')->with('success',' Catrgory Deleted');
        }
        }
        
}
