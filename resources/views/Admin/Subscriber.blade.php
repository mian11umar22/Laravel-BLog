@extends('admin.layout')
@section('title', 'Manage Subscribers')
@section('content')
<!-- Hero with Search & Categories Preview -->
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
    <!-- Page Header with Add Button -->
    <div class="flex items-center justify-between">
        <h2 class="text-3xl font-bold text-white flex items-center">
            <span class="bg-gradient-to-r from-purple-500 to-rose-500 w-1.5 h-8 block mr-3 rounded-full"></span>
            Subscribers
        </h2>
        <a href="{{ route('subscriber.create') }}"><button
            class="px-4 py-2 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg hover:opacity-90 transition-opacity flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            New User
        </button></a>
    </div>

    <!-- Categories Table -->
    <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-700">
                    <tr>
                        <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                        Id</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Role</th>
                           
                        <th scope="col"
                            class="px-6 py-3 text-right text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                @foreach ($user as $item)
                    
               
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    <!-- Sample Category 1 -->
                    <tr class="hover:bg-gray-750 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="text-xl mr-3">{{ $item->id }}</span>
                                <span class="text-gray-200 font-medium">{{ $item->name }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ $item->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-400">{{ $item->role }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                           <a href="{{ route('subscriber.edit',$item->id) }}"><button class="text-purple-400 hover:text-purple-300 mr-4">Edit</button></a>
                           <form action="{{ route('subscriber.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-rose-400 hover:text-rose-300">Delete</button>
                        </form>
                        </td>
                    </tr>


                </tbody>
                @endforeach
            </table>
        </div>
    </div>



</div>






@endsection