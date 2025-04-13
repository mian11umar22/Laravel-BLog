<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200">
    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-64 bg-gray-800 p-4">
            <h1 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-rose-500 mb-8">
                Admin Panel
            </h1>
            <nav class="space-y-2">
                <a href="{{route('dashboard')  }}" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">Dashboard</a>
                <a href="{{  route('art.index')  }}" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">Articles</a>
                <a href="{{ route('cat.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">Categories</a>
                <a href="{{ route('subscriber.index') }}" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">Subscribers</a>
                
        </div>

        <!-- Main Content -->   
        <div class="flex-1 p-8 overflow-auto">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold">@yield('page-title')</h2>
                <div class="flex items-center space-x-4">
                    <span>Mian Umar saif</span>
                  
             <a href="{{ route('logout') }}"> <button class="text-gray-400 hover:text-rose-400">Logout</button></a>
                </div>
            </div>
            
            @yield('content')
        </div>
    </div>
</body>
</html>