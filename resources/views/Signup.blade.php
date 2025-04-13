@extends('layout')
@section('title', 'Sign Up')
@section('content')

<section class="py-20">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-4">
                Join Our Community
            </h1>
            <p class="text-gray-400">Sign up to get updates on the latest Laravel articles and tutorials</p>
            <div class="w-20 h-1 bg-gradient-to-r from-purple-500 to-rose-500 mx-auto mt-4"></div>
        </div>

        <div class="bg-gray-900 rounded-xl p-6 border border-gray-800">
            <h2 class="text-2xl font-bold text-gray-100 mb-6 flex items-center">
                <span class="bg-gradient-to-r from-cyan-500 to-purple-500 w-1.5 h-6 block mr-3 rounded-full"></span>
                Create Account
            </h2>
            
            <form class="space-y-5" action="{{ route('signup') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-gray-300 mb-2 text-sm">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="Your name"
                    >
                </div>
                
                <div>
                    <label for="email" class="block text-gray-300 mb-2 text-sm">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="your@email.com"
                    >
                </div>
                
                <div>
                    <label for="password" class="block text-gray-300 mb-2 text-sm">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="••••••••"
                    >
                </div>
                 <button 
                    type="submit" 
                    class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity mt-4"
                >
                    Sign Up
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-400">
                Already have an account? 
                <a href="{{ route('loginshow') }}" class="text-purple-400 hover:text-rose-400">Login instead</a>
            </div>
        </div>
    </div>
</section>

@endsection