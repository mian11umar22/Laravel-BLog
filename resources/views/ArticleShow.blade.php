@extends('layout')
@section('title',$article->title)
@section('content')

<section class="py-20">
    
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <!-- Back button remains the same -->
        </div>

        <article class="prose prose-invert max-w-none">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-400 to-rose-500 bg-clip-text text-transparent mb-8">
                {{ $article->title }}
            </h1>
            
            <div class="border-b border-gray-800 mb-12"></div>

            <div class="responsive-content text-gray-300 leading-relaxed space-y-6">
                {!! $article->longcontent !!}
            </div>
        </article>
    </div>
</section>

<style>
    .responsive-content {
        max-width: 100%;
        overflow-x: hidden;
    }

    .responsive-content img {
        max-width: 100%;
        height: auto;
        margin: 2rem auto;
        border-radius: 0.5rem;
    }

    .responsive-content iframe {
        width: 100%;
        max-width: 100%;
        height: 400px;
        margin: 2rem auto;
        border-radius: 0.5rem;
    }

    .responsive-content table {
        width: 100%;
        display: block;
        overflow-x: auto;
        white-space: nowrap;
        margin: 2rem 0;
    }

    .responsive-content pre {
        max-width: 100%;
        overflow-x: auto;
        padding: 1rem;
        background: #1a1a1a;
        border-radius: 0.5rem;
        margin: 1.5rem 0;
    }

    .responsive-content code {
        word-wrap: break-word;
        white-space: pre-wrap;
    }
</style>