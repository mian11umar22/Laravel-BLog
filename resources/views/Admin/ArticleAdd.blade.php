@extends('admin.layout')
@section('title', 'Add New Article')
@section('content')
<div class="mb-6">
    <h3 class="text-lg text-white font-semibold mb-3">Available Categories</h3>
    <h5 class="text-lg text-white font-semibold mb-3">Please Scroll this is to show all categories so that you can add article into suaitable category</h5>
    <table class="min-w-full divide-y divide-gray-700 bg-gray-800 border border-gray-600 rounded-lg">
        <thead class="bg-gray-700 text-gray-300">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Emoji</th>
            </tr>
        </thead>
        <tbody class="text-gray-200">
            @foreach ($categories as $item)
                <tr class="hover:bg-gray-700">
                    <td class="px-4 py-2">{{ $item->id }}</td>
                    <td class="px-4 py-2">{{ $item->name }}</td>
                    <td class="px-4 py-2">{{ $item->emojis }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

 

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
            Add New Article 
        </h2>

        <form action="{{ route('art.store') }}" method="POST">
            @csrf
            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-300 mb-2">Article Title</label>
                <input 
                    type="text" 
                    id="name" 
                    name="title" 
                    x-model="categoryName"
                    
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400"
                    
                    required
                >
            </div>

            <!-- Emoji Input -->
            <div class="mb-6">
                <label for="shortcontent" class="block text-gray-300 mb-2">ShortContent</label>
                <input 
                    type="text" 
                    id="emoji" 
                    name="shortcontent" 
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
                   
                   
                >
                 
      </div>
      <div class="mb-6">
        <label for="longcontent" class="block text-gray-300 mb-2">LongContent</label>
        <input 
            type="text" 
            id="longcontent" 
            name="longcontent" 
            class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
           
             
        >
         
</div>
<div class="mb-6">
    <label for="category_id" class="block text-gray-300 mb-2">categoryId</label>
    <input 
        type="number" 
        id="category_id" 
        name="category_id" 
        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white placeholder-gray-400 text-2xl"
       
        
    >
     
</div>

            <!-- Slug Field -->
             
            <button 
                type="submit" 
                class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity"
            >
                Create Category
            </button>
        </form>
    </div>
</div>

<!-- AlpineJS for interactivity -->
 

@endsection