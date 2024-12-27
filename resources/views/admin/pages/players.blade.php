@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-800/40 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-gray-700/50 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10"></div>
            <div class="relative">
                <!-- Header Section -->
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">Create Tournament</h2>
                        <p class="text-gray-400 mt-3 text-lg">Set up your new epic tournament</p>
                    </div>
                </div>

                <!-- Tournament Setup Form -->
                <form class="space-y-10">
                    <!-- Tournament Details -->
                    <div class="bg-gray-800/60 backdrop-blur rounded-2xl p-8 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-[1.01] hover:shadow-xl hover:shadow-blue-500/10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="p-3 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-xl">
                                <i class="fas fa-trophy text-2xl text-blue-400"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Tournament Details</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-gray-300 mb-3 font-medium">Tournament Name</label>
                                <input type="text" class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-blue-500 focus:ring-blue-500 transition-all duration-300 placeholder-gray-400" placeholder="Enter tournament name">
                            </div>
                            <div>
                                <label class="block text-gray-300 mb-3 font-medium">Start Date</label>
                                <input type="date" class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-blue-500 focus:ring-blue-500 transition-all duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Tournament Format -->
                    <div class="bg-gray-800/60 backdrop-blur rounded-2xl p-8 border border-gray-600/50 hover:border-purple-500/50 transition-all duration-300 transform hover:scale-[1.01] hover:shadow-xl hover:shadow-purple-500/10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="p-3 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-xl">
                                <i class="fas fa-chess-board text-2xl text-purple-400"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Tournament Format</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div>
                                <label class="block text-gray-300 mb-3 font-medium">Format Type</label>
                                <select class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-purple-500 focus:ring-purple-500 transition-all duration-300">
                                    <option>Single Elimination</option>
                                    <option>Double Elimination</option>
                                    <option>Round Robin</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-300 mb-3 font-medium">Number of Rounds</label>
                                <select class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-purple-500 focus:ring-purple-500 transition-all duration-300">
                                    <option>2 Rounds (4 Teams)</option>
                                    <option>3 Rounds (8 Teams)</option>
                                    <option>4 Rounds (16 Teams)</option>
                                    <option>5 Rounds (32 Teams)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-300 mb-3 font-medium">Match Format</label>
                                <select class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-purple-500 focus:ring-purple-500 transition-all duration-300">
                                    <option>Best of 1</option>
                                    <option>Best of 3</option>
                                    <option>Best of 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Players/Teams Setup -->
                    <div class="bg-gray-800/60 backdrop-blur rounded-2xl p-8 border border-gray-600/50 hover:border-pink-500/50 transition-all duration-300 transform hover:scale-[1.01] hover:shadow-xl hover:shadow-pink-500/10">
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex items-center gap-4">
                                <div class="p-3 bg-gradient-to-br from-pink-500/20 to-red-500/20 rounded-xl">
                                    <i class="fas fa-users text-2xl text-pink-400"></i>
                                </div>
                                <h3 class="text-2xl font-semibold text-white">Players/Teams</h3>
                            </div>
                            <button type="button" class="px-6 py-3 bg-gradient-to-r from-pink-600 to-purple-600 text-white rounded-xl hover:shadow-lg hover:shadow-pink-500/25 transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
                                <i class="fas fa-plus"></i>Add Player/Team
                            </button>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Player/Team Entry -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center bg-gray-700/30 p-6 rounded-xl border border-gray-600/50 hover:border-pink-500/50 transition-all duration-300">
                                <div>
                                    <input type="text" placeholder="Player/Team Name" class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-pink-500 focus:ring-pink-500 transition-all duration-300 placeholder-gray-400">
                                </div>
                                <div>
                                    <input type="text" placeholder="Contact Email" class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-pink-500 focus:ring-pink-500 transition-all duration-300 placeholder-gray-400">
                                </div>
                                <div class="flex items-center gap-4">
                                    <select class="w-full bg-gray-700/50 border-2 border-gray-600 rounded-xl px-5 py-4 text-white focus:border-pink-500 focus:ring-pink-500 transition-all duration-300">
                                        <option>Seed 1</option>
                                        <option>Seed 2</option>
                                        <option>Seed 3</option>
                                        <option>Seed 4</option>
                                    </select>
                                    <button type="button" class="p-4 text-red-400 hover:text-red-300 transition-colors duration-300 bg-gray-700/50 rounded-xl hover:bg-red-500/20">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Settings -->
                    <div class="bg-gray-800/60 backdrop-blur rounded-2xl p-8 border border-gray-600/50 hover:border-green-500/50 transition-all duration-300 transform hover:scale-[1.01] hover:shadow-xl hover:shadow-green-500/10">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="p-3 bg-gradient-to-br from-green-500/20 to-teal-500/20 rounded-xl">
                                <i class="fas fa-cog text-2xl text-green-400"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-white">Additional Settings</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex items-center bg-gray-700/30 p-4 rounded-xl">
                                <input type="checkbox" class="w-5 h-5 rounded bg-gray-700 border-gray-600 text-green-500 focus:ring-green-500">
                                <label class="ml-3 text-gray-300">Enable Third Place Match</label>
                            </div>
                            <div class="flex items-center bg-gray-700/30 p-4 rounded-xl">
                                <input type="checkbox" class="w-5 h-5 rounded bg-gray-700 border-gray-600 text-green-500 focus:ring-green-500">
                                <label class="ml-3 text-gray-300">Allow Score Submissions by Players</label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="group px-8 py-4 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 flex items-center gap-3">
                            <span class="text-lg font-medium">Create Tournament</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform duration-300"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
