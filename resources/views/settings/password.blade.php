<x-layouts.default>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="sticky top-0 bg-gray-900/95 backdrop-blur-sm z-10 px-6 py-4 border-b border-gray-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <a href="javascript:history.back()"
                            class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"
                            aria-label="Go back">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <h1 class="text-xl font-bold">Change Password</h1>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="px-6 py-8 max-w-2xl mx-auto">
                <!-- Security Notice -->
                <div class="bg-blue-900/20 border border-blue-600/30 rounded-lg p-4 mb-8">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <div>
                            <h3 class="text-lg font-medium text-blue-400">For your security</h3>
                            <p class="text-sm text-gray-300">Please make sure your new password is strong and unique to
                                secure your account.</p>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form action="/change-password" method="POST" class="space-y-6">
                    <!-- Current Password -->
                    <div>
                        <label for="currentPassword" class="block text-sm font-medium text-gray-300">Current
                            Password</label>
                        <input type="password" id="currentPassword" name="currentPassword" required
                            class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-md text-gray-100 focus:ring-blue-500 focus:border-blue-500 transition duration-200" />
                    </div>

                    <!-- New Password -->
                    <div>
                        <label for="newPassword" class="block text-sm font-medium text-gray-300">New Password</label>
                        <input type="password" id="newPassword" name="newPassword" required
                            class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-md text-gray-100 focus:ring-blue-500 focus:border-blue-500 transition duration-200" />
                    </div>

                    <!-- Confirm New Password -->
                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-300">Confirm New
                            Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required
                            class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-md text-gray-100 focus:ring-blue-500 focus:border-blue-500 transition duration-200" />
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" id="submitBtn"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

        </div>

</x-layouts.default>