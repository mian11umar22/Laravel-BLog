@extends('layout')
@section('title', 'About Us')
@section('content')

<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-6">
                About Laravel Mastery Hub
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-rose-500 mx-auto"></div>
        </div>

        <div class="prose prose-invert max-w-none">
            <!-- Mission Section -->
            <div class="mb-12 p-6 bg-gray-900 rounded-xl">
                <h2 class="text-3xl font-bold text-gray-100 mb-4 flex items-center">
                    <span class="bg-gradient-to-r from-cyan-500 to-purple-500 w-1.5 h-8 block mr-3 rounded-full"></span>
                    Our Mission
                </h2>
                <p class="text-lg text-gray-300 leading-relaxed">
                    To empower Laravel developers with comprehensive, up-to-date resources that bridge the gap between 
                    basic understanding and professional mastery. We're committed to creating content that's both 
                    technically profound and practically applicable.
                </p>
            </div>

            <!-- What We Offer -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-100 mb-8 flex items-center">
                    <span class="bg-gradient-to-r from-rose-500 to-purple-500 w-1.5 h-8 block mr-3 rounded-full"></span>
                    What We Offer
                </h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                        <div class="text-purple-400 text-3xl mb-3">📚</div>
                        <h3 class="text-xl font-semibold text-gray-100 mb-2">In-Depth Tutorials</h3>
                        <p class="text-gray-400">
                            Step-by-step guides covering everything from core concepts to advanced patterns.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                        <div class="text-cyan-400 text-3xl mb-3">⚡</div>
                        <h3 class="text-xl font-semibold text-gray-100 mb-2">Performance Optimization</h3>
                        <p class="text-gray-400">
                            Techniques to make your Laravel applications blazing fast.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                        <div class="text-rose-400 text-3xl mb-3">🔒</div>
                        <h3 class="text-xl font-semibold text-gray-100 mb-2">Security Best Practices</h3>
                        <p class="text-gray-400">
                            Keep your applications secure with our expert recommendations.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-900 rounded-xl hover:bg-gray-800 transition-colors">
                        <div class="text-purple-400 text-3xl mb-3">🧪</div>
                        <h3 class="text-xl font-semibold text-gray-100 mb-2">Testing Strategies</h3>
                        <p class="text-gray-400">
                            Comprehensive testing approaches for robust applications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
           <!-- Just You Section -->
<div class="mb-12 text-center">
    <img src="{{ asset('storage/images/picofme.png') }}" 
         alt="Mian Umar Saif" 
         class="w-60 h-60 mx-auto mb-6 rounded-full object-cover shadow-md ring-8 ring-purple-500 ring-offset-2">
    
    <h3 class="text-xl font-semibold text-gray-100">Mian Umar Saif</h3>
    <p class="text-purple-400 mb-2">Laravel Developer</p>
    <p class="text-gray-400 max-w-md mx-auto">
        Sharing my Laravel knowledge through practical articles.
    </p>
</div>


            <!-- Call to Action -->
            <div class="text-center mt-16">
                <h2 class="text-2xl font-bold text-gray-100 mb-6">Ready to Master Laravel?</h2>
                <a href="{{ route('/') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity">
                    Browse Our Articles
                </a>
            </div>
        </div>
    </div>
</section>

@endsection