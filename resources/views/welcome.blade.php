<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Manager - Welcome</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <!-- Top Navigation -->
    <nav class="flex justify-end p-6 bg-white shadow">
        @if (Route::has('login'))
            <div class="space-x-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 font-semibold">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-semibold">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600 font-semibold">Sign Up</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col justify-center items-center text-center px-6">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4 leading-tight max-w-3xl">
            Organize Your Tasks, Boost Your Productivity
        </h1>
        <p class="text-gray-600 text-lg max-w-xl mb-8">
            Manage your daily tasks efficiently with our intuitive Task Management app. Stay on top of deadlines, priorities, and progress — all in one place.
        </p>

        <div class="space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-8 py-3 bg-blue-600 text-white rounded-md font-semibold hover:bg-blue-700 transition">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-8 py-3 bg-teal-600 text-white rounded-md font-semibold hover:bg-teal-700 transition">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-8 py-3 border border-teal-600 text-teal-600 rounded-md font-semibold hover:bg-teal-50 transition">
                            Sign Up
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </main>

    <footer class="bg-white border-t text-center p-4 text-gray-500 text-sm">
        &copy; {{ date('Y') }} Task Manager App. All rights reserved.
    </footer>

</body>
</html>
