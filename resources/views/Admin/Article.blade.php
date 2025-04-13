@extends('admin.layout')
@section('title', 'Manage Articles')
@section('content')
@if (session('success'))
<div class="mb-6 bg-green-600 text-white text-sm px-6 py-4 rounded-lg shadow-md">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="mb-6 bg-red-600 text-white text-sm px-6 py-4 rounded-lg shadow-md">
    {{ session('error') }}
</div>
@endif
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-3xl font-bold text-white flex items-center">
            <span class="bg-gradient-to-r from-purple-500 to-rose-500 w-1.5 h-8 block mr-3 rounded-full"></span>
            Articles
        </h2>
        <a href="{{ route('art.create') }}"> 
            <button class="px-4 py-2 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg hover:opacity-90 transition-opacity flex items-center">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New Article
            </button>
        </a>
    </div>

    <!-- Articles Table -->
    <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase">Category_id</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase">Short Content</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase">Slug</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-300 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    @foreach ($articles as $article)
                        <tr class="hover:bg-gray-750 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ Str::limit($article->title ,15)}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-100 font-medium">{{ $article->category_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ Str::limit($article->shortcontent ,5) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ Str::limit($article->slug) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('art.edit', $article->id) }}" class="text-purple-400 hover:text-purple-300 mr-4">Edit</a>
                                <form action="{{ route('art.destroy', $article->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-400 hover:text-rose-300">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
