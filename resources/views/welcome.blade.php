@extends('layout')
@section('title', 'LaravelBLog')
@section('content')

<!-- Hero with Search & Categories Preview -->@if (session('success'))
    <div class="mb-6 bg-green-600 text-white text-sm px-6 py-4 rounded-lg shadow-md">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-6 bg-red-600 text-white text-sm px-6 py-4 rounded-lg shadow-md">
        {{ session('error') }}
    </div>
@endif

<section class="min-h-screen flex items-center bg-gradient-to-b from-gray-900 to-gray-900/50">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-6 leading-tight">
                Laravel Core Concepts
            </h1>
            <p class="text-xl text-gray-400 mb-8 max-w-3xl mx-auto">
                Master Laravel through its fundamental building blocks
            </p>
            <form action="{{ route('search') }}" method="GET" class="relative max-w-2xl mx-auto mb-20">
                <div class="relative">
                    <input 
                        type="text" 
                        name="query"
                        value="{{ request('query') }}"
                        placeholder="Search concepts..." 
                        class="w-full px-6 py-4 pr-16 bg-gray-900 border border-gray-800 rounded-2xl focus:ring-2 focus:ring-purple-500 focus:border-transparent placeholder-gray-500 text-gray-200"
                    >
                    <button 
                        type="submit" 
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-400 hover:text-rose-400 transition-colors"
                        aria-label="Search"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <!-- Core Concepts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach($category as $category)
            <a href="{{ route('category.show', $category->slug) }}" class="group p-6 bg-gray-800 rounded-xl hover:bg-gray-700 transition-all transform hover:-translate-y-2">
                <div class="flex flex-col items-center">
                    <div class="text-4xl mb-3 text-purple-400 group-hover:text-rose-400 transition-colors">
                        {{ $category->emojis }}
                    </div>
                    <h3 class="text-gray-200 font-medium text-center">{{ $category->name }}</h3>
                    <div class="mt-2 h-1 w-8 bg-purple-500 group-hover:bg-rose-400 transition-colors"></div>
                </div>
            </a>
            @endforeach
        </div>

 

@endsection