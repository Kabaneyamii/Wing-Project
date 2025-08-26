<x-layouts.default>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <!-- Header with Back Button -->
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
                        <h1 class="text-xl font-bold">Edit Profile</h1>
                    </div>
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/25">
                        Save
                    </button>
                </div>
            </div>

            <!-- Header Image Section -->
            <div class="relative">
                <div
                    class="relative h-48 bg-gradient-to-r from-blue-900 via-purple-900 to-gray-800 rounded-b-xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/60"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button
                            class="w-12 h-12 bg-gray-900/70 hover:bg-gray-800/80 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Avatar Section -->
                <div class="absolute -bottom-16 left-6">
                    <div class="relative">
                        <div class="w-32 h-32 rounded-full overflow-hidden ring-4 ring-gray-900 bg-gray-900">
                            <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                class="w-full h-full object-cover" alt="Profile Picture" />
                        </div>
                        <button
                            class="absolute inset-0 w-32 h-32 bg-gray-900/70 hover:bg-gray-800/80 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="px-6 pt-20 pb-8">
                <form class="space-y-6">

                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Name</label>
                        <div class="relative">
                            <input type="text" value="Ozu"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg px-4 py-3 text-gray-100 placeholder-gray-400 transition-colors"
                                placeholder="Your name">
                            <div class="absolute right-3 top-3 text-xs text-gray-400">3/50</div>
                        </div>
                    </div>

                    <!-- Username Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Username</label>
                        <div class="relative">
                            <div class="absolute left-4 top-3 text-gray-400">@</div>
                            <input type="text" value="ozu_filmmaker"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg pl-8 pr-16 py-3 text-gray-100 placeholder-gray-400 transition-colors"
                                placeholder="username">
                            <div class="absolute right-3 top-3 text-xs text-gray-400">12/50</div>
                        </div>
                    </div>

                    <!-- Bio Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Bio</label>
                        <div class="relative">
                            <textarea rows="4"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg px-4 py-3 text-gray-100 placeholder-gray-400 transition-colors resize-none"
                                placeholder="Tell us about yourself">Film director and storyteller. Creating visual poetry through cinema. "The most important thing is sincerity." 🎬</textarea>
                            <div class="absolute right-3 bottom-3 text-xs text-gray-400">160/160</div>
                        </div>
                    </div>

                    <!-- Location Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Location</label>
                        <div class="relative">
                            <div class="absolute left-4 top-3">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <input type="text" value="Tokyo, Japan"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg pl-12 pr-16 py-3 text-gray-100 placeholder-gray-400 transition-colors"
                                placeholder="Add your location">
                            <div class="absolute right-3 top-3 text-xs text-gray-400">12/30</div>
                        </div>
                    </div>

                    <!-- Website Input -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Website</label>
                        <div class="relative">
                            <div class="absolute left-4 top-3">
                                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H6.9C4.01 7 1.9 9.11 1.9 12s2.11 5 5 5h4v-1.9H6.9C5.19 17.1 3.9 15.71 3.9 14v-2zm4.1 1h8v-2H8v2zm9.1-5h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.89 0 5-2.11 5-5s-2.11-5-5-5z" />
                                </svg>
                            </div>
                            <input type="url" value="https://ozufilms.com"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg pl-12 pr-16 py-3 text-gray-100 placeholder-gray-400 transition-colors"
                                placeholder="Add your website">
                            <div class="absolute right-3 top-3 text-xs text-gray-400">21/100</div>
                        </div>
                    </div>

                    <!-- Birth Date -->
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-300">Birth date</label>
                        <div class="relative">
                            <div class="absolute left-4 top-3">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="date" value="1903-12-12"
                                class="w-full bg-gray-800 border border-gray-600 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg pl-12 pr-4 py-3 text-gray-100 placeholder-gray-400 transition-colors"
                                placeholder="Add your birth date">
                        </div>
                    </div>

                </form>
            </div>

            <!-- Bottom Save Button -->
            <div class="sticky bottom-0 bg-gray-900/95 backdrop-blur-sm border-t border-gray-700 px-6 py-4">
                <button
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/25">
                    Save Profile
                </button>
            </div>

        </div>

        <script>
            // Character counters
            document.addEventListener('input', function (e) {
                if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
                    const maxLengths = {
                        'name': 50,
                        'username': 50,
                        'bio': 160,
                        'location': 30,
                        'website': 100
                    };

                    const type = e.target.getAttribute('placeholder')?.toLowerCase();
                    let fieldType = '';

                    if (type?.includes('name')) fieldType = 'name';
                    else if (type?.includes('username')) fieldType = 'username';
                    else if (type?.includes('yourself')) fieldType = 'bio';
                    else if (type?.includes('location')) fieldType = 'location';
                    else if (type?.includes('website')) fieldType = 'website';

                    if (fieldType && maxLengths[fieldType]) {
                        const counter = e.target.parentElement.querySelector('.text-xs');
                        if (counter) {
                            const currentLength = e.target.value.length;
                            const maxLength = maxLengths[fieldType];
                            counter.textContent = `${currentLength}/${maxLength}`;

                            if (currentLength > maxLength) {
                                counter.classList.add('text-red-400');
                                counter.classList.remove('text-gray-400');
                            } else {
                                counter.classList.add('text-gray-400');
                                counter.classList.remove('text-red-400');
                            }
                        }
                    }
                }
            });
        </script>

    </div>

</x-layouts.default>