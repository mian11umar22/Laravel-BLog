@extends('layout')
@section('title', 'Reset Password')
@section('content')

<section class="py-20">
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

    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-4">
                Set New Password
            </h1>
            <p class="text-gray-400">Create a new secure password for your account</p>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-rose-500 mx-auto mt-4"></div>
        </div>

        <div class="bg-gray-900 rounded-xl p-6 border border-gray-800">

            <!-- Global Validation Errors -->
            @if ($errors->any())
                <div class="mb-6 bg-red-800 text-red-100 px-4 py-3 rounded-lg text-sm">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="space-y-6" method="post" action="{{ route('resetform') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <label for="email" class="block text-gray-300 mb-2 text-sm">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        value="{{ old('email') }}"
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="your@email.com"
                    >
                    @error('email')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-gray-300 mb-2 text-sm">New Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-gray-300 mb-2 text-sm">Confirm New Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="••••••••"
                    >
                </div>

                <button 
                    type="submit" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity"
                >
                    Update Password
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-400">
                Remember your password? 
                <a href="{{ route('loginshow') }}" class="text-purple-400 hover:text-rose-400">Login here</a>
            </div>
        </div>
    </div>
</section>

@endsection
