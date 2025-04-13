@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')

<div class="space-y-8">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Articles Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-gray-700 shadow-lg hover:shadow-purple-500/10 transition-all duration-300 hover:border-purple-500/30">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 font-medium">Total Articles</p>
                    <h3 class="text-3xl font-bold text-white mt-2">{{ $article }}</h3>
                </div>
                <div class="p-3 rounded-lg bg-purple-500/10 text-purple-400 shadow-inner">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('art.index') }}" class="mt-4 inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300 group transition-colors">
                View All
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <!-- Categories Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-gray-700 shadow-lg hover:shadow-cyan-500/10 transition-all duration-300 hover:border-cyan-500/30">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 font-medium">Categories</p>
                    <h3 class="text-3xl font-bold text-white mt-2">{{ $category }}</h3>
                </div>
                <div class="p-3 rounded-lg bg-cyan-500/10 text-cyan-400 shadow-inner">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('cat.index') }}" class="mt-4 inline-flex items-center text-sm font-medium text-cyan-400 hover:text-cyan-300 group transition-colors">
                Manage
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <!-- Subscribers Card -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-gray-700 shadow-lg hover:shadow-rose-500/10 transition-all duration-300 hover:border-rose-500/30">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400 font-medium">Subscribers</p>
                    <h3 class="text-3xl font-bold text-white mt-2">{{ $user }}</h3>
                </div>
                <div class="p-3 rounded-lg bg-rose-500/10 text-rose-400 shadow-inner">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <a href="{{ route('subscriber.index') }}" class="mt-4 inline-flex items-center text-sm font-medium text-rose-400 hover:text-rose-300 group transition-colors">
                View All
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        <!-- Comments Card -->
         
    </div>

     

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-gray-700 shadow-lg hover:shadow-purple-500/10 transition-all duration-300">
            <h3 class="text-xl font-semibold text-white mb-4">Create New Article</h3>
            <p class="text-gray-400 mb-6">Start writing a new blog post</p>
            <a href="{{ route('art.create') }}" class="inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-purple-600 to-rose-600 rounded-lg font-medium hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-purple-500/30">
                New Article
                <svg class="w-4 h-4 ml-2 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </a>
        </div>
        
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-6 border border-gray-700 shadow-lg hover:shadow-cyan-500/10 transition-all duration-300">
            <h3 class="text-xl font-semibold text-white mb-4">Add New Category</h3>
            <p class="text-gray-400 mb-6">Organize your articles better</p>
           <a href="{{ route('cat.create') }}"><button class="inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-cyan-600 to-purple-600 rounded-lg font-medium hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-cyan-500/30">
                New Category
                <svg class="w-4 h-4 ml-2 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </button></a> 
        </div>
    </div>
</div>

@endsection