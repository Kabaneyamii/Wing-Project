<x-layouts.default>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="sticky top-0 bg-gray-900/95 backdrop-blur-sm z-10 px-6 py-4 border-b border-gray-700">
                <div class="flex items-center gap-4">
                    <a href="javascript:history.back()"
                        class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"
                        aria-label="Go back">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <h1 class="text-xl font-bold">Settings</h1>
                </div>
            </div>

            <!-- Profile Section -->
            <div class="px-6 py-6 border-b border-gray-700">
                <div onclick="goToProfile()" class="flex items-center gap-4 cursor-pointer group">
                    <div class="relative">
                        <div
                            class="w-16 h-16 rounded-full overflow-hidden ring-2 ring-gray-600/50 group-hover:ring-gray-500 transition-all">
                            <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                alt="Profile Picture" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-100 group-hover:text-white transition-colors">Ozu
                        </h2>
                        <p class="text-gray-400 text-sm">@Yasujiro_Ozu</p>
                        <p class="text-gray-500 text-sm">ozu@example.com</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-gray-500 group-hover:text-gray-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

            <!-- Settings Options -->
            <div class="px-6 py-2">

                <!-- Account Section -->
                <div class="py-4">
                    <div class="space-y-2">

                        <!-- Profile Details -->
                        <div onclick="openProfileDetails()"
                            class="flex items-center gap-4 p-4 rounded-lg hover:bg-gray-800/50 cursor-pointer transition-all group">
                            <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-100 group-hover:text-white transition-colors">Edit
                                    Profile
                                </h4>
                                <p class="text-gray-400 text-sm">Update your personal information</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-gray-500 group-hover:text-gray-400 transition-colors" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>

                        <!-- Password -->
                        <div onclick="openPasswordSettings()"
                            class="flex items-center gap-4 p-4 rounded-lg hover:bg-gray-800/50 cursor-pointer transition-all group">
                            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-100 group-hover:text-white transition-colors">Change
                                    Password</h4>
                                <p class="text-gray-400 text-sm">Update your account password</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-gray-500 group-hover:text-gray-400 transition-colors" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>

                    </div>
                </div>

                <!-- Legal Section -->
                <div class="py-4 border-t border-gray-700/50">
                    <div class="space-y-2"></div>

                    <!-- Terms & Conditions -->
                    <div onclick="openTerms()"
                        class="flex items-center gap-4 p-4 rounded-lg hover:bg-gray-800/50 cursor-pointer transition-all group">
                        <div class="w-10 h-10 rounded-full bg-orange-500/20 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-100 group-hover:text-white transition-colors">Terms &
                                Conditions
                            </h4>
                            <p class="text-gray-400 text-sm">Read our terms of service</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-500 group-hover:text-gray-400 transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="py-4 border-t border-gray-700/50">
                <div class="space-y-2"></div>
                <!-- Logout -->
                <div onclick="logout()"
                    class="flex items-center gap-4 p-4 rounded-lg hover:bg-red-900/20 cursor-pointer transition-all group border border-red-800/30 hover:border-red-600/50">
                    <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium text-red-400 group-hover:text-red-300 transition-colors">Logout</h4>
                        <p class="text-red-400/70 text-sm">Sign out of your account</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 text-red-500 group-hover:text-red-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

            </div>
        </div>

    </div>

    </div>

    <script>
        function goToProfile() {
            window.location.href = '/profile/Ozu';
        }

        function openProfileDetails() {
            window.location.href = '/details';
        }

        function openPasswordSettings() {
            window.location.href = '/password';
        }

        function openTerms() {
            window.location.href = '/terms';
        }

        function logout() {
            if (confirm('Are you sure you want to logout?')) {
                window.location.href = '/login';
            }
        }
    </script>

    </div>

</x-layouts.default>