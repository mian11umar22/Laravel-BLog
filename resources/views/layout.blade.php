<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#0d0d0d] text-gray-200 font-sans leading-relaxed" x-data="{ isOpen: false }">
    <!-- Header -->
    <header class="bg-gradient-to-b from-gray-900 to-gray-900/80 backdrop-blur-sm border-b border-gray-800 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-400 to-purple-500 hover:from-rose-300 hover:to-purple-400 transition-all">
                    MyLaravelBlog
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-300 hover:text-rose-400 transition-colors font-medium group">
                        Home
                        <span class="block h-0.5 bg-rose-400 scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                    </a>
                    <a href="{{ route('About') }}" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium group">
                        About
                        <span class="block h-0.5 bg-cyan-400 scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                    </a>
                    <a href="{{ route('Contact') }}" class="text-gray-300 hover:text-purple-400 transition-colors font-medium group">
                        Contact
                        <span class="block h-0.5 bg-purple-400 scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                    </a>
                    <a href="{{ route('loginshow') }}" class="ml-4 px-4 py-1.5 rounded-lg bg-gray-800 text-sm text-gray-200 hover:bg-purple-600 transition">
                        Login
                    </a>
                    <a href="{{ route('signupshow') }}" class="px-4 py-1.5 rounded-lg bg-purple-600 text-sm text-white hover:bg-purple-700 transition">
                        Sign Up
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button @click="isOpen = !isOpen" class="md:hidden p-2 text-gray-400 hover:text-rose-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M4 6h16M4 12h16m-16 6h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="md:hidden" x-show="isOpen" @click.away="isOpen = false" x-cloak>
                <div class="pt-2 pb-3 space-y-1">
                    <a href="/" class="block px-3 py-2 text-gray-300 hover:text-rose-400 hover:bg-gray-800 rounded-lg">
                        Home
                    </a>
                    <a href="{{ route('About') }}" class="block px-3 py-2 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg">
                        About
                    </a>
                    <a href="{{ route('Contact') }}" class="block px-3 py-2 text-gray-300 hover:text-purple-400 hover:bg-gray-800 rounded-lg">
                        Contact
                    </a>
                    <a href="{{ route('loginshow') }}" class="block px-3 py-2 text-gray-300 hover:text-purple-400 hover:bg-gray-800 rounded-lg">Login</a>
                    <a href="{{ route('signupshow') }}" class="block px-3 py-2 text-gray-300 hover:text-rose-400 hover:bg-gray-800 rounded-lg">Sign Up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 md:pt-24 pb-12">
        <div class="prose prose-invert max-w-none">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} MyLaravelBlog. Crafted with <span class="text-rose-500">♥</span> By Mian Umar saif</p>
                <div class="mt-2 flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-4">
                    <a href="https://www.instagram.com/mian_umar_saifullah/" class="hover:text-rose-400 transition-colors">Instagram</a>
                    <a href="https://github.com/mian11umar22" class="hover:text-cyan-400 transition-colors">GitHub</a>
                    <a href="https://www.linkedin.com/in/umar-saif-417629286/" class="hover:text-purple-400 transition-colors">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</body>
</html>