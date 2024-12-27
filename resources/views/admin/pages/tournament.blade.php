@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-800/40 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-gray-700/50 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10"></div>
            <div class="relative">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Tournament History</h2>
                        <p class="text-gray-400 mt-2">List of all tournaments</p>
                    </div>
                    <button class="group px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 flex items-center gap-3">
                        <i class="fas fa-plus group-hover:rotate-90 transition-transform duration-300"></i>
                        <span>Create Tournament</span>
                    </button>
                </div>

                <!-- Tournament List -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="bg-gray-800/60 backdrop-blur rounded-2xl p-6 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-xl">
                                <i class="fas fa-trophy text-2xl text-blue-400"></i>
                            </div>
                            <span class="px-4 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">Completed</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Tournament #{{ $i }}</h3>
                        <div class="text-gray-400 text-sm mb-4">
                            <div class="flex items-center gap-2 mb-1">
                                <i class="fas fa-users"></i>
                                <span>8 Teams</span>
                            </div>
                            <div class="flex items-center gap-2 mb-1">
                                <i class="fas fa-calendar"></i>
                                <span>Started: Jan {{ $i }}, 2024</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-crown"></i>
                                <span>Winner: Team {{ $i }}</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <button class="px-4 py-2 bg-gray-700/50 text-gray-300 rounded-xl hover:bg-gray-700 transition-colors duration-300">
                                View Details
                            </button>
                            <div class="flex -space-x-2">
                                @for ($j = 1; $j <= 3; $j++)
                                <img class="w-8 h-8 rounded-full border-2 border-gray-800" src="https://ui-avatars.com/api/?name=Team{{ $j }}&background=0D8ABC&color=fff" alt="Team {{ $j }}">
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button class="p-2 rounded-lg bg-gray-700/50 text-gray-400 hover:bg-gray-700 transition-colors duration-300">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 rounded-lg bg-blue-500 text-white">1</button>
                        <button class="px-4 py-2 rounded-lg bg-gray-700/50 text-gray-400 hover:bg-gray-700 transition-colors duration-300">2</button>
                        <button class="px-4 py-2 rounded-lg bg-gray-700/50 text-gray-400 hover:bg-gray-700 transition-colors duration-300">3</button>
                        <button class="p-2 rounded-lg bg-gray-700/50 text-gray-400 hover:bg-gray-700 transition-colors duration-300">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
