@extends('layout')
@section('title', 'Search Results')
@section('content')

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search Header -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-100 mb-4">
                Search Results for "{{ $query }}"
            </h2>
            <p class="text-gray-400">
                Found {{ $article->count() }} matching articles
            </p>
        </div>

        <!-- Results Grid -->
        @if($article->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($article as $article)
            <article class="group bg-gray-900 rounded-xl p-6 hover:bg-gray-800 transition-all duration-300">
                <div class="mb-4 relative">
                    <div class="w-full h-32 rounded-lg bg-gradient-to-br from-purple-500/20 to-cyan-500/10 flex items-center justify-center">
                         
                    </div>
                     
                </div>
                <h3 class="text-xl font-semibold text-gray-100 mb-2 line-clamp-2">
                    {{ $article->title }}
                </h3>
                <p class="text-gray-400 mb-4 line-clamp-3">
                    {{ $article->shortcontent }}
                </p>
                <a href="{{ route('article.show', $article->slug) }}" class="inline-block px-4 py-2 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                    Read More →
                </a>
            </article>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <div class="text-6xl mb-4">🔍</div>
            <h3 class="text-xl font-semibold text-gray-100 mb-2">
                No articles found
            </h3>
            <p class="text-gray-400 mb-6">
                Try different search terms or browse our categories
            </p>
            <a href="{{ route('/') }}" class="inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity">
                Browse Categories
            </a>
        </div>
        @endif

        <!-- Pagination -->
         
    </div>
</section>

@endsection