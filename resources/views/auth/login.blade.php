<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Tournament Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #111827;
            color: #fff;
        }
    </style>
</head>
<body class="bg-gray-900">
    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <div class="max-w-md w-full bg-gray-800 p-8 rounded-3xl shadow-2xl space-y-8 backdrop-blur-lg border border-gray-700/30">
            <div class="space-y-3">
                <div class="flex justify-center mb-8">
                    <div class="p-5 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-lg">
                        <i class="fas fa-trophy text-4xl text-white"></i>
                    </div>
                </div>
                <h2 class="text-center text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Tournament Bracket System
                </h2>
                <p class="text-center text-gray-400">
                    Sign in to manage your tournaments
                </p>
            </div>
            
            <form class="space-y-6" action="/admin/app/dashboard" method="GET">
                @csrf
                
                @if ($errors->any())
                    <div class="bg-red-900/30 text-red-300 p-4 rounded-xl border border-red-800/50">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="space-y-5">
                    <div class="group">
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-500 group-hover:text-blue-400 transition-colors"></i>
                            </div>
                            <input id="email" name="email" type="email" 
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-700/50 border border-gray-600 rounded-xl
                                text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                transition-all duration-200 backdrop-blur-sm" 
                                placeholder="Enter your email">
                        </div>
                    </div>
                    
                    <div class="group">
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-500 group-hover:text-blue-400 transition-colors"></i>
                            </div>
                            <input id="password" name="password" type="password" 
                                class="block w-full pl-11 pr-4 py-3.5 bg-gray-700/50 border border-gray-600 rounded-xl
                                text-white placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                                transition-all duration-200 backdrop-blur-sm"
                                placeholder="Enter your password">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" 
                            class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-600 rounded bg-gray-700">
                        <label for="remember_me" class="ml-2 text-sm text-gray-400">
                            Remember me
                        </label>
                    </div>

                    <a href="" class="text-sm font-medium text-blue-400 hover:text-blue-300 transition-colors">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" 
                    class="w-full flex justify-center items-center py-4 px-4 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700
                    text-white font-medium rounded-xl transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-gray-800">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign in
                </button>

                <div class="space-y-4">

                <a href="/auth/google" class="w-full flex justify-center items-center py-3 px-4 bg-white hover:bg-gray-100
                    text-gray-800 font-medium rounded-xl transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <i class="fab fa-google mr-2"></i>
                    Continue with Google
                </a>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800 text-gray-400">Or continue with</span>
                    </div>
                </div>
            </div>

            </form>

            <div class="text-center">
                <p class="text-gray-400">
                    Don't have an account?
                    <a href="auth/register" class="font-medium text-blue-400 hover:text-blue-300 ml-1 transition-colors">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
