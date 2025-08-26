<x-layouts.auth>

    <x-slot name="leftSide">
        <div class="flex flex-col items-center space-y-4 mt-8 px-6">
            <p class="text-gray-300 text-lg font-medium">Already have an account?</p>
            <a href="/login">
                <button
                    class="border-2 border-gray-500/50 text-gray-300 bg-gray-800/30 rounded-lg px-6 py-2 hover:bg-gray-700/50 hover:border-gray-400 transition-all duration-300 font-medium backdrop-blur-sm">Login
                </button>
            </a>
        </div>
    </x-slot>

    <div class="block md:hidden mb-6 text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Wing Logo"
            class="mx-auto w-20 h-auto filter brightness-110 drop-shadow-lg" />
    </div>


    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-100 mb-3 tracking-wide">Join Wing</h1>
        <p class="text-gray-400 py-2 text-lg">Create your account and start flying</p>
    </div>

    <form enctype="multipart/form-data">
        <!-- Avatar Upload Section -->
        <div class="mb-8 px-3">
            <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide mb-4 block">Profile
                Picture</label>
            <div class="flex flex-col items-center space-y-4">
                <!-- Avatar Preview -->
                <div class="relative group">
                    <div
                        class="w-24 h-24 rounded-full bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 flex items-center justify-center overflow-hidden transition-all duration-300 group-hover:border-blue-500/70">
                        <img id="avatar-preview" src="" alt="Avatar Preview" class="w-full h-full object-cover hidden">
                        <div id="avatar-placeholder" class="text-gray-400 text-center">
                            <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-xs">Upload Photo</span>
                        </div>
                    </div>

                    <!-- Upload Button Overlay -->
                    <label for="avatar"
                        class="absolute inset-0 flex items-center justify-center bg-gray-900/50 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 cursor-pointer">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </label>
                </div>

                <!-- File Input (Hidden) -->
                <input type="file" id="avatar" name="avatar" accept="image/*" class="hidden"
                    onchange="previewAvatar(event)">

                <!-- Upload Button -->
                <label for="avatar"
                    class="bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-300 rounded-lg px-4 py-2 hover:bg-gray-700/50 hover:border-gray-400 transition-all duration-300 cursor-pointer text-sm font-medium">
                    Choose Photo
                </label>

                <p class="text-gray-500 text-xs text-center">JPG, PNG or GIF (Max 2MB)</p>
            </div>
        </div>

        <div class="mb-8 px-3 flex flex-col md:flex-row gap-4">

            <div class="w-full md:w-1/2">
                <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Full Name</label>
                <input type="text" name="full_name" placeholder="Ahmed"
                    class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
            </div>

            <div class="w-full md:w-1/2">
                <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Username</label>
                <input type="text" name="username" placeholder="@ahmed123"
                    class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
            </div>
        </div>


        <div class="mb-6 px-3">
            <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Email</label>
            <input type="email" name="email" placeholder="ahmed@example.com"
                class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
        </div>

        <div class="mb-8 px-3">
            <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Password</label>
            <input type="password" name="password" placeholder="Create a strong password"
                class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
        </div>

        <div class="px-3">
            <button type="submit"
                class="w-full bg-gradient-to-r from-gray-700 to-blue-900 text-gray-100 rounded-xl px-4 py-4 font-semibold hover:from-gray-600 hover:to-blue-800 transition-all duration-300 shadow-xl transform hover:scale-105">
                Spread Your Wings →
            </button>
        </div>

        <div class="block md:hidden mt-4 text-center text-gray-400 text-sm">
            Already have an account?
            <a href="/login" class="text-blue-500 hover:underline font-semibold">Login</a>
        </div>
    </form>

    <script>
        function previewAvatar(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('avatar-preview');
            const placeholder = document.getElementById('avatar-placeholder');

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }

                reader.readAsDataURL(file);
            }
        }
    </script>


</x-layouts.auth>