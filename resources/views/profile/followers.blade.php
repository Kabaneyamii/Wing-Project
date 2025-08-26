<x-layouts.default>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="sticky top-0 bg-gray-900/95 backdrop-blur-sm z-10 py-4 border-b border-gray-700 px-1">
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
                        <div>
                            <h1 class="text-xl font-bold">Followers</h1>
                            <p class="text-sm text-gray-400">1.2K people</p>
                        </div>
                    </div>

                    <a href="/"
                        class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"
                        aria-label="Go home">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Followers List -->
            <div class="px-6 pt-2 pb-6">


                <!-- User 1 -->
                <div
                    class="flex items-center justify-between py-4 border-b border-gray-700/30 hover:bg-gray-800/20 transition-colors px-2 rounded-lg">
                    <div class="flex items-center gap-4">
                        <a href="/profile/cinematographer" class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50 hover:ring-gray-500 transition-all">
                                <img src="https://media.mutualart.com/Images/2021_09/16/06/062056199/74f4bbf5-c7fd-42a3-9e70-1719fb282836.Jpeg"
                                    class="w-full h-full object-cover" alt="Cinematographer Avatar" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-100 hover:text-white transition-colors">Akira
                                </h3>
                                <p class="text-gray-400 text-sm">@Akira_Kurosawa</p>
                                <p class="text-gray-300 text-sm mt-1 max-w-xs">Master of cinema. Dreams become reality
                                    through film.</p>
                            </div>
                        </a>
                    </div>
                    <button
                        class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-full text-sm font-medium transition-colors">
                        Following
                    </button>
                </div>

                <!-- User 2 -->
                <div
                    class="flex items-center justify-between py-4 border-b border-gray-700/30 hover:bg-gray-800/20 transition-colors px-2 rounded-lg">
                    <div class="flex items-center gap-4">
                        <a href="/profile/filmeditor" class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50 hover:ring-gray-500 transition-all">
                                <img src="https://p2.itc.cn/images01/20210524/629334928927496b942f5af69194dee6.jpeg"
                                    class="w-full h-full object-cover" alt="Film Editor Avatar" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-100 hover:text-white transition-colors"></h3>Koreeda
                                </h3>
                                <p class="text-gray-400 text-sm">@Hirokazu_Koreeda</p>
                                <p class="text-gray-300 text-sm mt-1 max-w-xs">Storyteller of simple families and quiet
                                    lives.</p>
                            </div>
                        </a>
                    </div>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium transition-colors">
                        Follow
                    </button>
                </div>

            </div>

        </div>

        <script>
            // Handle follow/unfollow buttons
            document.addEventListener('click', function (e) {
                if (e.target.tagName === 'BUTTON' && e.target.textContent.trim() === 'Following') {
                    e.target.textContent = 'Follow';
                    e.target.classList.remove('bg-gray-700', 'hover:bg-gray-600');
                    e.target.classList.add('bg-blue-600', 'hover:bg-blue-700');
                } else if (e.target.tagName === 'BUTTON' && e.target.textContent.trim() === 'Follow') {
                    e.target.textContent = 'Following';
                    e.target.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                    e.target.classList.add('bg-gray-700', 'hover:bg-gray-600');
                }
            });
        </script>

    </div>

</x-layouts.default>