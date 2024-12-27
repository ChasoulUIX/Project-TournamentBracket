<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #111827;
            color: #fff;
        }
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, #3B82F6, #9333EA);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
        .nav-link.active {
            background: linear-gradient(to right, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
        }
    </style>
</head>
<body class="bg-gray-900">
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-trophy text-xl text-white"></i>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/admin/app/dashboard" class="nav-link {{ request()->is('admin/app/dashboard') ? 'active' : '' }} text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Dashboard</a>
                            <a href="/pages/tournament" class="nav-link {{ request()->is('pages/tournament') ? 'active' : '' }} text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Tournaments</a>
                            <a href="/pages/players" class="nav-link {{ request()->is('pages/players') ? 'active' : '' }} text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Players</a>
                            <a href="/auth/login" class="nav-link text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="bg-gray-700 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white transform hover:scale-110 transition-all duration-300">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell text-xl"></i>
                        </button>

                        <div class="ml-3 relative">
                            <div>
                                <button class="max-w-xs bg-gray-700 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white transform hover:scale-110 transition-all duration-300">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
