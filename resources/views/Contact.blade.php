@extends('layout')
@section('title', 'Contact Us')
@section('content')

<section class="py-20">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-6">
                Contact Us
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-rose-500 mx-auto"></div>
        </div>

        <div class="bg-gray-900 rounded-xl p-6 md:p-8">
            <form action="{{ route('contactform') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-gray-300 mb-2">Your Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="Enter your name"
                    >
                </div>
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-gray-300 mb-2">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="your@email.com"
                    >
                </div>
                
                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-gray-300 mb-2">Your Message</label>
                    <textarea 
                        id="message" 
                        name="usermessage" 
                        rows="5"
                        required
                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-200 placeholder-gray-500"
                        placeholder="How can we help you?"
                    ></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="w-full px-6 py-3 bg-gradient-to-r from-purple-500 to-rose-500 rounded-lg font-medium hover:opacity-90 transition-opacity"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <!-- Additional Info -->
        <div class="mt-12 text-center text-gray-400">
            <p>Or reach us directly at: <span class="text-purple-400"> 
                 
                <a href="mailto:mian11umar22@gmail.com">mian11umar22@gmail.com</a></span></p>
        </div>
    </div>
</section>

@endsection