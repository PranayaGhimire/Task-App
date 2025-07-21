<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl  px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <span class="font-bold text-xl">TaskApp</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}"
                       class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        Dashboard
                    </a>
                    <a href="{{ route('tasks.index') }}"
                       class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                        Tasks
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Authentication Links -->
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-700 hover:text-red-600">
                            Logout ({{ Auth::user()->name }})
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-blue-600 mr-4">Login</a>
                    <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-blue-600">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
