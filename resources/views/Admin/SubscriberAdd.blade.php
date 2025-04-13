@extends('admin.layout')
@section('title', 'Add New Category')
@section('content')
@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-md mx-auto">
    <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
        <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
            <span class="bg-gradient-to-r from-purple-500 to-rose-500 w-1.5 h-6 block mr-3 rounded-full"></span>
            Add New Category
        </h2>
   
      
        <form action="{{ route('subscriber.store') }}" method="POST">
            @csrf
            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-300 mb-2">Subscriber Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    x-model="categoryName"
                    
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400"
                     
                    required
                >
            </div>

            <!-- Emoji Input -->
            <div class="mb-6">
                <label for="emoji" class="block text-gray-300 mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
                 
                >
                
            </div>
            <div class="mb-6">
                <label for="emoji" class="block text-gray-300 mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
               
                >
                
            </div>
            <div class="mb-6">
                <label for="emoji" class="block text-gray-300 mb-2">Role</label>
                <input 
                    type="Role" 
                    id="Role" 
                    name="role" 
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
                  
                >
                
            </div>

            <!-- Slug Field -->
             
            <button 
                type="submit" 
                class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity"
            >
                Create Subscriber
            </button>
        </form>
    </div>
</div>

<!-- AlpineJS for interactivity -->
 

@endsection