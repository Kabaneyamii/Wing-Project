<x-layouts.default>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto px-6 py-6">

            <!-- Header -->
            <header class="sticky top-0 bg-gray-900/95 backdrop-blur-sm z-10 py-4 mb-6 border-b border-gray-700 px-1">

                <div class="flex items-center justify-between">
                    <button onclick="history.back();" aria-label="Go back"
                        class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <div class="text-center">
                        <h1 class="text-2xl font-bold">Bookmarks</h1>
                        <p class="text-gray-400 text-sm">@ozu_filmmaker</p>
                    </div>

                    <a href="/" aria-label="Go home"
                        class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" />
                        </svg>
                    </a>
                </div>
            </header>



            <!-- Bookmarks Grid -->
            <section id="bookmarksContainer" class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Bookmark Card 1 -->
                <article
                    class="bg-gray-800 rounded-lg p-5 shadow-md hover:shadow-lg transition-shadow cursor-pointer flex flex-col">
                    <div class="flex items-center gap-4 mb-4">
                        <a href="/profile/kurosawa" class="block shrink-0">
                            <img src="https://media.mutualart.com/Images/2021_09/16/06/062056199/74f4bbf5-c7fd-42a3-9e70-1719fb282836.Jpeg"
                                alt="Kurosawa Avatar"
                                class="w-16 h-16 rounded-full ring-2 ring-gray-600/50 hover:ring-gray-500 transition" />
                        </a>
                        <div>
                            <a href="/profile/kurosawa" class="font-semibold text-gray-100 hover:text-white transition">
                                Akira
                            </a>
                            <p class="text-gray-400 text-sm">@Akira_Kurosawa · 2h</p>
                        </div>
                    </div>
                    <a href="/posts/123" class="flex-1">
                        <p class="text-gray-200 leading-relaxed mb-4">
                            Movie directors, or should I say people who create things, are very greedy and they can
                            never be
                            satisfied… That’s why they can keep on working. I’ve been able to work for so long because I
                            think next time, I’ll make something good.
                        </p>
                    </a>
                    <div class="flex justify-between items-center text-gray-400 text-sm">
                        <div class="flex gap-4">
                            <button
                                class="flex items-center gap-1 hover:text-blue-400 transition-colors focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                12
                            </button>
                            <button
                                class="flex items-center gap-1 hover:text-green-400 transition-colors focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                8
                            </button>
                            <button
                                class="flex items-center gap-1 hover:text-red-400 transition-colors focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                45
                            </button>
                        </div>
                        <button onclick="removeBookmark(this)" aria-label="Remove bookmark"
                            class="text-yellow-400 hover:text-yellow-300 transition-colors p-2 rounded-full hover:bg-yellow-400/10 focus:outline-none">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2z" />
                            </svg>
                        </button>
                    </div>
                </article>

            </section>
        </div>

        <script>
            function removeBookmark(button) {
                const card = button.closest('article');
                if (card) card.remove();
            }
        </script>
    </div>

</x-layouts.default>