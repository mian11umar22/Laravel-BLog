@extends('layout')
@section('title', 'Forgot Password')
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
                Reset Password
            </h1>
            <p class="text-gray-400">Enter your email to receive a password reset link</p>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-rose-500 mx-auto mt-4"></div>
        </div>

        <div class="bg-gray-900 rounded-xl p-6 border border-gray-800">
            <form class="space-y-6" action="{{ route('forgotform') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-gray-300 mb-2 text-sm">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="your@email.com"
                    >
                </div>
                
                <button 
                    type="submit" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity"
                >
                    Send Reset Link
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-400">
                Remember your password? 
                <a href="/login" class="text-purple-400 hover:text-rose-400">Login here</a>
            </div>
        </div>
    </div>
</section>

@endsection