@extends('layout')
@section('title', 'Articles')
@section('content')
@if($cat->Articles->isEmpty())
    <div class="mt-20  text-white rounded-2xl p-2 text-center h bg-red-800">Sorry the Page is Empty</div>
@endif
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($cat->Articles as $i)
    <article class="group bg-gray-900 rounded-xl p-6 hover:bg-gray-800 transition-all duration-300">
        <div class="mb-4 relative">         
        </div>
        <h3 class="text-xl font-semibold text-gray-100 mb-2 line-clamp-2">
            {{$i->title }}
        </h3>
        <p class="text-gray-400 mb-4 line-clamp-3">
            {{$i->shortcontent}}
        </p>
        <a href="{{ route('article.show', $i->slug) }}" class="inline-block px-4 py-2 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
            Read More →
        </a>
    </article>
    @endforeach
</div>
@endsection