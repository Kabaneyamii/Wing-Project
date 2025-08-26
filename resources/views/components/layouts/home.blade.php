<x-layouts.default>
    <nav
        class="navbar max-w-[calc(100vw-32px)] mx-auto px-4 sm:max-w-4xl sm:px-6 lg:px-8 bg-gray-800/80 backdrop-blur-sm rounded-box shadow-lg sticky top-2 z-50 border border-gray-700/50 transition-all duration-300 hover:bg-gray-800/90 hover:shadow-xl flex-wrap">

        <!-- Logo and home link -->
        <div class="flex flex-1 items-center space-x-2">
            <a href="/"
                class="link text-gray-200 hover:text-white link-neutral text-xl font-bold no-underline transition-colors duration-300 flex items-center">
                <!-- Logo icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 mr-1 text-gray-300 hover:text-gray-100 transition-colors duration-300" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 8v10H4V11l8-8z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V13h6v8" />
                </svg>
                Wing
            </a>
        </div>

        <!-- User options and dropdown menu -->
        <div class="navbar-end flex items-center gap-4">
            <!-- User profile dropdown -->
            <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
                <button id="dropdown-scrollable" type="button"
                    class="dropdown-toggle flex items-center p-2 rounded-lg hover:bg-gray-700/50 transition-all duration-300"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <!-- User avatar and dropdown indicator -->
                    <div class="avatar">
                        <div
                            class="size-9.5 rounded-full ring-2 ring-gray-600/50 hover:ring-gray-500/70 transition-all duration-300">
                            <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                alt="avatar" class="object-cover" />
                        </div>
                    </div>
                    <svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-200 transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown menu with profile, settings, and sign out options -->
                <ul class="dropdown-menu opacity-0 invisible absolute right-0 top-full mt-2 min-w-60 bg-gray-800/95 backdrop-blur-sm border border-gray-700/50 rounded-xl shadow-xl z-50"
                    role="menu" aria-orientation="vertical" aria-labelledby="dropdown-avatar">
                    <li class="dropdown-header gap-2 p-4 border-b border-gray-700/50 flex items-center">
                        <div class="avatar mr-3">
                            <div class="w-10 rounded-full ring-2 ring-gray-600/30">
                                <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                    alt="avatar" class="object-cover" />
                            </div>
                        </div>
                        <div>
                            <h6 class="text-gray-200 text-base font-semibold">Yasujirō Ozu</h6>
                        </div>
                    </li>
                    <li><a href="/profile/ozu"
                            class="dropdown-item text-gray-200 hover:text-white hover:bg-gray-700/50 transition-all duration-200 flex items-center py-3"><span
                                class="icon-[tabler--user] mr-3 text-gray-400"></span>My Profile</a></li>
                    <li><a href="/notifications"
                            class="dropdown-item text-gray-200 hover:text-white hover:bg-gray-700/50 transition-all duration-200 flex items-center py-3"><span
                                class="icon-[tabler--bell] mr-3 text-gray-400"></span>Notifications</a></li>
                    <li><a href="/bookmarks"
                            class="dropdown-item text-gray-200 hover:text-white hover:bg-gray-700/50 transition-all duration-200 flex items-center py-3"><span
                                class="icon-[tabler--help-triangle] mr-3 text-gray-400"></span>Bookmarks</a></li>
                    <li><a href="/settings"
                            class="dropdown-item text-gray-200 hover:text-white hover:bg-gray-700/50 transition-all duration-200 flex items-center py-3"><span
                                class="icon-[tabler--settings] mr-3 text-gray-400"></span>Settings</a></li>
                    <li class="dropdown-footer gap-2 p-4 border-t border-gray-700/50">
                        <a href="/login"
                            class="btn bg-gray-700/50 text-gray-200 hover:bg-gray-600/60 hover:text-white border border-gray-600/50 hover:border-gray-500/70 btn-block transition-all duration-300 flex items-center justify-center"><span
                                class="icon-[tabler--logout] mr-2"></span>Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Main content placeholder (where dynamic content will be inserted) -->
    <div id="mainContent">
        {{ $slot }} <!-- Slot for injecting dynamic content -->
    </div>

    <!-- Floating button for creating a new post -->
    <button id="openModalBtn" class="fixed bottom-6 right-6 group">
        <div
            class="bg-white p-4 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 flex items-center justify-center relative overflow-hidden glow-effect">
            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity rounded-full">
            </div>
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-7 h-7 relative z-10">
        </div>
        <div
            class="absolute -top-12 right-0 bg-gray-800 text-white px-3 py-2 rounded-lg text-sm opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
            <span>What's New?</span>
            <div
                class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800">
            </div>
        </div>
    </button>

    <!-- Modal for creating new posts -->
    <div id="modal"
        class="fixed inset-0 backdrop-blur-md flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 z-50">
        <div class="bg-gray-900/90 rounded-3xl p-8 max-w-xl w-full mx-4 relative">
            <button id="closeModalBtn"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-200 text-3xl font-bold">&times;</button>
            <h2 class="text-3xl font-bold text-gray-100 mb-4 tracking-wide text-center">New Post</h2>
            <form>
                <textarea id="postTextarea" maxlength="300" spellcheck="false"
                    placeholder="What's on your mind? Share your thoughts, ideas, or stories..."
                    class="w-full h-60 bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 rounded-xl p-4 resize-none outline-none focus:border-blue-500/70 focus:bg-gray-800/70 transition-all duration-300"></textarea>
                <div class="flex justify-between items-center mt-3 mb-6">
                    <div class="text-gray-400 text-sm font-medium"><span id="charCount">0</span><span
                            class="text-gray-500">/300</span></div>
                    <div class="space-x-4">
                        <button type="button" id="cancelBtn"
                            class="bg-gray-700/50 text-gray-300 border border-gray-600/50 hover:bg-gray-600/60 hover:border-gray-500/60 px-6 py-3 rounded-xl font-medium transition-all duration-300">Cancel</button>
                        <button type="submit"
                            class="bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-500 hover:to-blue-600 px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom glow effect for the floating button -->
    <style>
        .glow-effect {
            box-shadow: 0 0 15px 4px rgba(75, 85, 99, 0.8);
        }

        .glow-effect:hover {
            box-shadow: 0 0 20px 8px rgba(75, 85, 99, 1);
        }
    </style>

    <script>
        const modal = document.getElementById('modal');
        const mainContent = document.getElementById('mainContent');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const textarea = document.getElementById('postTextarea');
        const charCount = document.getElementById('charCount');

        // Open the modal
        function openModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            mainContent.classList.add('opacity-50', 'pointer-events-none', 'blur-sm');
            textarea.value = '';
            charCount.textContent = '0';
            charCount.className = 'text-gray-400';
        }

        // Close the modal
        function closeModal() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            mainContent.classList.remove('opacity-50', 'pointer-events-none', 'blur-sm');
        }

        // Open the modal when the floating button is clicked
        openModalBtn.addEventListener('click', openModal);

        // Close the modal when the close button inside the modal is clicked
        closeModalBtn.addEventListener('click', closeModal);

        // Close the modal when the cancel button is clicked
        cancelBtn.addEventListener('click', closeModal);

        // Close the modal when clicking outside of the modal
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Close the modal when the Escape key is pressed
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Update the character count while typing in the textarea
        textarea.addEventListener('input', () => {
            const length = textarea.value.length;
            charCount.textContent = length;
            if (length > 250) {
                charCount.className = 'text-red-400';
            } else if (length > 200) {
                charCount.className = 'text-yellow-400';
            } else {
                charCount.className = 'text-gray-400';
            }
        });

        // Handle dropdown functionality
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const dropdown = toggle.closest('.dropdown');
                const menu = dropdown.querySelector('.dropdown-menu');
                const isOpen = !menu.classList.contains('opacity-0');

                // Close all dropdowns first
                document.querySelectorAll('.dropdown-menu').forEach(otherMenu => {
                    otherMenu.classList.add('opacity-0', 'invisible');
                    otherMenu.classList.remove('opacity-100', 'visible');
                });

                // Toggle current dropdown
                if (!isOpen) {
                    menu.classList.remove('opacity-0', 'invisible');
                    menu.classList.add('opacity-100', 'visible');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.add('opacity-0', 'invisible');
                    menu.classList.remove('opacity-100', 'visible');
                });
            }
        });
    </script>


</x-layouts.default>