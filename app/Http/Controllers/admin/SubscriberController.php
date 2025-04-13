<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= User::all();
        return view('Admin.Subscriber',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.SubscriberAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|max:6',
            'role'=>'required'
        ]);
        $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role
        ]);
        if($user){
            return redirect()->route('subscriber.index')->with('success','New Subscriber Added');
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
        $user= User::find($id);
        return view('Admin.SubsciberUpdate',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subs =User::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|',
            'role'=>'required'
        ]);
        $user=$subs->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role
        ]);
        if($user){
            return redirect()->route('subscriber.index')->with('success','Subscriber Updated');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subs=User::find($id);
        $user=$subs->delete();
        if($user){
            return redirect()->route('subscriber.index')->with('success','Subscriber Deleted');
        }
        
    }
}
