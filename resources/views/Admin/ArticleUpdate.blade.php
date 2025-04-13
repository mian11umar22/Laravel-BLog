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

<div class="max-w-2xl mx-auto">
    <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
        <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
            <span class="bg-gradient-to-r from-purple-500 to-rose-500 w-1.5 h-6 block mr-3 rounded-full"></span>
            Edit Category
        </h2>

        {{-- Add your correct route here --}}
        <form action="{{ route('art.update',$article->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ old('title', $article->title) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('title')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Short Content -->
            <div class="mb-6">
                <label for="shortcontent" class="block text-gray-300 mb-2">Short Content</label>
                <input 
                    type="text" 
                    id="shortcontent" 
                    name="shortcontent" 
                    value="{{ old('shortcontent', $article->shortcontent) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('shortcontent')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Long Content -->
            <div class="mb-6">
                <label for="longcontent" class="block text-gray-300 mb-2">Long Content</label>
                <textarea 
                    id="longcontent" 
                    name="longcontent" 
                    rows="5"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white resize-y"
                    required
                >{{ old('longcontent', $article->longcontent) }}</textarea>
                @error('longcontent')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-6">
                <label for="slug" class="block text-gray-300 mb-2">Slug</label>
                <input 
                    type="text" 
                    id="slug" 
                    name="slug" 
                    value="{{ old('slug', $article->slug) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('slug')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category ID -->
            <div class="mb-6">
                <label for="category_id" class="block text-gray-300 mb-2">Category ID</label>
                <input 
                    type="text" 
                    id="category_id" 
                    name="category_id" 
                    value="{{ old('category_id', $article->category_id) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('category_id')
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
