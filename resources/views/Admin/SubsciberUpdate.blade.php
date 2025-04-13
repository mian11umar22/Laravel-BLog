@extends('admin.layout')
@section('title', 'Subscriber')
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
            Edit Subscriber
        </h2>

        <form action="{{ route('subscriber.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Name Field -->
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Name</label>
                <div class="flex items-center space-x-4">
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ old('name',$user->name) }}"
                        class="text-3xl w-full text-center p-2 bg-gray-700 border border-gray-600 rounded-lg"
                        required
                    >    
                </div>
                @error('name')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-gray-300 mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email',$user->email) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('email')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Role Field -->
            <div class="mb-6">
                <label for="role" class="block text-gray-300 mb-2">Role</label>
                <input 
                    type="text" 
                    id="role" 
                    name="role" 
                    value="{{ old('role',$user->role) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('role')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-gray-300 mb-2">Password</label>
                <input 
                    type="text" 
                    id="password" 
                    name="password" 
                    value="{{ old('password',$user->password) }}"
                    class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-white"
                    required
                >
                @error('password')
                    <p class="text-rose-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity">
                Update Subscriber
            </button>
        </form>
    </div>
</div>
@endsection
