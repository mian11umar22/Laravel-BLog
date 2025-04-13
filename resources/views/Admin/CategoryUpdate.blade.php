@extends('admin.layout')
@section('title', 'Edit Category')
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
            Edit Category
        </h2>

        <form action="{{ route('cat.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Emoji Field -->
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Emoji</label>
                <div class="flex items-center space-x-4">
                    <input 
                        type="text" 
                        name="emojis" 
                        value="{{ old('emojis', $category->emojis) }}"
                        class="text-3xl w-16 text-center p-2 bg-gray-700 border border-gray-600 rounded-lg"
                        maxlength="2"
                        required
                    >
                    <p class="text-gray-400 text-sm">
                        Paste any emoji<br>
                        <span class="text-xs">(Win+. or Mac+Cmd+Ctrl+Space)</span>
                    </p>
                </div>
                @error('emoji')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-300 mb-2">Category Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $category->name) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('name')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug Field -->
            <div class="mb-6">
                <label for="slug" class="block text-gray-300 mb-2">Slug</label>
                <input 
                    type="text" 
                    id="slug" 
                    name="slug" 
                    value="{{ old('slug', $category->slug) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('slug')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity">
                Update Category
            </button>
        </form>
    </div>
</div>



@endsection