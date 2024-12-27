@extends('admin.layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <!-- Tournament Bracket Section -->
            <div class="bg-gray-800/40 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-gray-700/50 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10"></div>
                <div class="relative">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Tournament Bracket</h2>
                            <p class="text-gray-400 mt-2">8 Teams Single Elimination</p>
                        </div>
                        <button class="group px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 flex items-center gap-3">
                            <i class="fas fa-plus group-hover:rotate-90 transition-transform duration-300"></i>
                            <span>New Tournament</span>
                        </button>
                    </div>

                    <!-- Tournament Bracket Display -->
                    <div class="overflow-x-auto">
                        <div class="flex space-x-24 p-6 min-w-max">
                            <!-- Round 1 -->
                            <div class="flex flex-col space-y-10">
                                <div class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 uppercase tracking-wider">Round 1</div>
                                {!! collect(range(1,4))->map(function($i) { return
                                    '<div onclick="openEditModal(\'match'.$i.'\')" class="cursor-pointer w-64 bg-gray-800/60 backdrop-blur rounded-2xl p-5 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/10">
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Team '.($i*2-1).'</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">0</div>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <span class="px-4 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-blue-400">VS</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Team '.($i*2).'</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">0</div>
                                            </div>
                                        </div>
                                    </div>';
                                })->implode('') !!}
                            </div>

                            <!-- Quarter Finals -->
                            <div class="flex flex-col space-y-32 mt-20">
                                <div class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 uppercase tracking-wider">Quarter Finals</div>
                                {!! collect(range(1,2))->map(function($i) { return
                                    '<div onclick="openEditModal(\'quarter'.$i.'\')" class="cursor-pointer w-64 bg-gray-800/60 backdrop-blur rounded-2xl p-5 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/10">
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Winner '.($i*2-1).'</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <span class="px-4 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-blue-400">VS</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Winner '.($i*2).'</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                            </div>
                                        </div>
                                    </div>';
                                })->implode('') !!}
                            </div>

                            <!-- Semi Finals -->
                            <div class="flex flex-col mt-48">
                                <div class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 uppercase tracking-wider">Semi Finals</div>
                                <div onclick="openEditModal('semi1')" class="cursor-pointer w-64 bg-gray-800/60 backdrop-blur rounded-2xl p-5 mt-20 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/10">
                                    <div class="flex flex-col space-y-4">
                                        <div class="flex items-center justify-between">
                                            <div class="text-white font-medium">Semi-Finalist 1</div>
                                            <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                        </div>
                                        <div class="flex items-center justify-center">
                                            <span class="px-4 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-blue-400">VS</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="text-white font-medium">Semi-Finalist 2</div>
                                            <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Finals -->
                            <div class="flex flex-col mt-48">
                                <div class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 uppercase tracking-wider">Finals</div>
                                <div onclick="openEditModal('final')" class="cursor-pointer w-64 bg-gray-800/60 backdrop-blur rounded-2xl p-5 mt-20 border border-gray-600/50 hover:border-blue-500/50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-blue-500/10">
                                    <div class="relative">
                                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                            <div class="px-4 py-1 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full text-xs font-bold text-black">
                                                CHAMPIONSHIP
                                            </div>
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Finalist 1</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <span class="px-4 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-yellow-500/20 to-yellow-500/20 text-yellow-400">VS</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-white font-medium">Finalist 2</div>
                                                <div class="px-3 py-1 bg-gray-700/50 rounded-full text-sm text-gray-300">-</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tournament Details -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-800/40 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-gray-700/50 relative overflow-hidden group hover:shadow-blue-500/10 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 group-hover:from-blue-500/10 group-hover:to-purple-500/10 transition-all duration-300"></div>
                    <div class="relative">
                        <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-6">Tournament Details</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur">
                                <span class="text-gray-300">Status</span>
                                <span class="px-4 py-1.5 bg-green-500/20 text-green-400 rounded-full text-sm font-medium">In Progress</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur">
                                <span class="text-gray-300">Teams</span>
                                <span class="text-white font-medium px-4 py-1.5 bg-gray-700/30 rounded-full">8 Teams</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur">
                                <span class="text-gray-300">Current Round</span>
                                <span class="text-white font-medium px-4 py-1.5 bg-gray-700/30 rounded-full">Quarter Finals</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur">
                                <span class="text-gray-300">Prize Pool</span>
                                <span class="text-yellow-400 font-medium px-4 py-1.5 bg-yellow-500/10 rounded-full">$10,000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-800/40 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-gray-700/50 relative overflow-hidden group hover:shadow-blue-500/10 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 group-hover:from-blue-500/10 group-hover:to-purple-500/10 transition-all duration-300"></div>
                    <div class="relative">
                        <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-6">Recent Activity</h3>
                        <div class="space-y-6">
                            <div class="flex items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur transform hover:scale-102 transition-all duration-300">
                                <div class="h-12 w-12 rounded-xl bg-green-500/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-trophy text-green-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-white font-medium">Team A won against Team B</p>
                                    <p class="text-sm text-gray-400 mt-1">Score: 3 - 1 • 2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-center p-4 bg-gray-700/20 rounded-xl backdrop-blur transform hover:scale-102 transition-all duration-300">
                                <div class="h-12 w-12 rounded-xl bg-blue-500/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-user-plus text-blue-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-white font-medium">New team registered</p>
                                    <p class="text-sm text-gray-400 mt-1">Team Phoenix • 5 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Edit Match Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center">
        <div class="bg-gray-800/90 backdrop-blur-xl rounded-3xl p-8 max-w-lg w-full mx-4 transform transition-all duration-300 scale-95 opacity-0 border border-gray-700/50 shadow-2xl" id="modalContent">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Edit Match Details</h3>
                <button onclick="closeEditModal()" class="text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form id="editMatchForm" class="space-y-6">
                <div class="space-y-6">
                    <div class="bg-gray-700/30 p-6 rounded-2xl border border-gray-600/50">
                        <div class="flex items-center justify-between mb-4">
                            <label class="text-lg font-medium text-gray-300">Team 1</label>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">Home Team</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-400 mb-2">Score</label>
                                    <input type="number" name="team1_score" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Enter score">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-400 mb-2">Fouls</label>
                                    <input type="number" name="team1_fouls" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Enter fouls">
                                </div>
                            </div>
                            <textarea name="team1_notes" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Additional notes for Team 1" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="bg-gray-700/30 p-6 rounded-2xl border border-gray-600/50">
                        <div class="flex items-center justify-between mb-4">
                            <label class="text-lg font-medium text-gray-300">Team 2</label>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Away Team</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-400 mb-2">Score</label>
                                    <input type="number" name="team2_score" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Enter score">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-400 mb-2">Fouls</label>
                                    <input type="number" name="team2_fouls" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Enter fouls">
                                </div>
                            </div>
                            <textarea name="team2_notes" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="Additional notes for Team 2" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="bg-gray-700/30 p-6 rounded-2xl border border-gray-600/50">
                        <label class="block text-lg font-medium text-gray-300 mb-4">Match Details</label>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Match Duration</label>
                                <input type="text" name="duration" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300" placeholder="e.g. 90 minutes">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Match Status</label>
                                <select name="status" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-xl text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300">
                                    <option value="scheduled">Scheduled</option>
                                    <option value="in_progress">In Progress</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4 mt-8">
                    <button type="submit" class="flex-1 px-6 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-102 font-medium">
                        <i class="fas fa-save mr-2"></i>
                        Save Changes
                    </button>
                    <button type="button" onclick="closeEditModal()" class="flex-1 px-6 py-4 bg-gray-700 text-white rounded-xl hover:bg-gray-600 transition-all duration-300 font-medium">
                        <i class="fas fa-times mr-2"></i>
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(matchId) {
            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('modalContent');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 50);
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('modalContent');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        document.getElementById('editMatchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Handle form submission here
            closeEditModal();
        });
    </script>
@endsection
