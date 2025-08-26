<x-layouts.default>
    <!-- Custom Styles for Icons and Animations -->
    <style>
        .pin-icon::before {
            content: "📌";
            /* Pin icon before the text */
            font-size: 14px;
        }

        .tab-content {
            opacity: 0;
            /* Initial state: hidden */
            transform: translateY(20px);
            /* Slide-in effect */
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            /* Smooth transition */
            position: absolute;
            width: 100%;
        }

        .tab-content.active {
            opacity: 1;
            /* Show content */
            transform: translateY(0);
            /* Slide to normal position */
            position: relative;
        }

        .reply-thread {
            border-left: 3px solid #374151;
            /* Visual indicator for reply threads */
            margin-left: 24px;
            padding-left: 20px;
        }

        .heart-animation {
            transition: all 0.2s ease;
            /* Smooth heart icon animation */
        }

        .heart-animation:hover {
            transform: scale(1.1);
            /* Scale up on hover */
        }

        .reply-indicator {
            background: linear-gradient(135deg, #1f2937, #374151);
            /* Gradient background for reply */
        }
    </style>

    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">
            <!-- Profile Header Section: Profile picture and background -->
            <div
                class="relative h-48 bg-gradient-to-r from-blue-900 via-purple-900 to-gray-800 rounded-b-xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/60"></div>
                <!-- Gradient overlay -->
            </div>

            <!-- Profile Info Section -->
            <div class="relative px-6 -mt-16">
                <!-- Back Button -->
                <a href="javascript:history.back()"
                    class="fixed top-6 left-6 w-10 h-10 bg-gray-800/70 hover:bg-gray-700 rounded-full flex items-center justify-center shadow-lg transition-colors z-50"
                    aria-label="Go back">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>

                <!-- Home Button -->
                <a href="/"
                    class="fixed top-5 right-8 w-11 h-11 bg-gray-800/70 hover:bg-gray-700 rounded-full flex items-center justify-center shadow-lg transition-colors z-50"
                    aria-label="Go home">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" />
                    </svg>
                </a>

                <!-- Profile Details (Avatar, Follow Button, Bio) -->
                <div class="flex justify-between items-start mb-4">
                    <div class="w-32 h-32 rounded-full overflow-hidden ring-4 ring-gray-900 bg-gray-900">
                        <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                            class="w-full h-full object-cover" alt="Profile Picture" />
                    </div>
                    <button id="followButton"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/25 mt-20">
                        Follow
                    </button>
                </div>

                <!-- User Info -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-100 mb-1">Ozu</h1>
                    <p class="text-gray-400 mb-3">@Yasujiro_Ozu</p>
                    <p class="text-gray-200 leading-relaxed mb-4">Film director and storyteller. Creating visual poetry
                        through cinema.</p>

                    <!-- User Info (Location, Website, Birth Date, Join Date) -->
                    <div class="flex flex-wrap items-center gap-x-6 gap-y-1 text-sm">
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-gray-400">Tokyo, Japan</span>
                        </div>

                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            <a href="https://ozufilms.com" target="_blank"
                                class="text-blue-400 hover:underline">ozufilms.com</a>
                        </div>

                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-400">Born December 12, 1903</span>
                        </div>

                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-400">Joined March 2019</span>
                        </div>
                    </div>

                    <!-- Following and Followers Count -->
                    <div class="flex items-center gap-6 mt-3">
                        <a href="/following" class="hover:underline cursor-pointer">
                            <span class="font-semibold text-gray-100">247</span>
                            <span class="text-gray-400 text-sm ml-1">Following</span>
                        </a>

                        <a href="/followers" class="hover:underline cursor-pointer">
                            <span class="font-semibold text-gray-100">1.2K</span>
                            <span class="text-gray-400 text-sm ml-1">Followers</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tabs for Posts, Replies, and Likes -->
            <div class="border-b border-gray-700/50 px-6">
                <nav class="flex space-x-8">
                    <button
                        class="tab-btn py-4 px-1 border-b-2 border-blue-500 font-medium text-blue-400 transition-all duration-300"
                        data-tab="posts">
                        Posts <span class="ml-2 text-xs bg-gray-800 px-2 py-1 rounded-full">157</span>
                    </button>
                    <button
                        class="tab-btn py-4 px-1 border-b-2 border-transparent font-medium text-gray-400 hover:text-gray-200 transition-all duration-300"
                        data-tab="replies">
                        Replies <span class="ml-2 text-xs bg-gray-800 px-2 py-1 rounded-full">28</span>
                    </button>
                    <button
                        class="tab-btn py-4 px-1 border-b-2 border-transparent font-medium text-gray-400 hover:text-gray-200 transition-all duration-300"
                        data-tab="likes">
                        Likes <span class="ml-2 text-xs bg-gray-800 px-2 py-1 rounded-full">89</span>
                    </button>
                </nav>
            </div>

            <!-- Content Container for Posts, Replies, and Likes -->
            <div class="relative min-h-[600px] overflow-hidden">
                <!-- Posts Content -->
                <div id="posts-content" class="tab-content active max-w-4xl mx-auto px-6 pt-8 pb-6 space-y-6">
                    <!-- Pinned Post -->
                    <div class="bg-gray-900/50 p-6 rounded-lg relative border border-gray-700">
                        <div
                            class="absolute top-4 left-4 flex items-center gap-2 text-blue-500 font-semibold text-sm pin-icon">
                            <span>Pinned Post</span>
                        </div>
                        <div class="flex items-center mb-4 mt-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50">
                                <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                    class="w-full h-full object-cover" alt="User Avatar" />
                            </div>
                            <div class="ml-3">
                                <div class="text-gray-100 font-medium">Ozu <span
                                        class="text-gray-400 text-sm font-normal">@Yasujiro_Ozu</span></div>
                                <div class="text-gray-400 text-sm">2 hours ago</div>
                            </div>
                        </div>
                        <p class="mb-6 text-gray-200 leading-relaxed">
                            Although I may seem the same to other people, to me each thing I produce is a new expression
                            and I always
                            make each work from a new interest.
                        </p>
                        <x-profile-actions /> <!-- Profile Actions -->
                    </div>

                    <!-- Regular Post -->
                    <div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50">
                                <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                                    class="w-full h-full object-cover" alt="User Avatar" />
                            </div>
                            <div class="ml-3">
                                <div class="text-gray-100 font-medium">Ozu <span
                                        class="text-gray-400 text-sm font-normal">@Yasujiro_Ozu</span></div>
                                <div class="text-gray-400 text-sm">6 hours ago</div>
                            </div>
                        </div>
                        <p class="mb-6 text-gray-200 leading-relaxed">
                            In my films, I try to capture the beauty of everyday moments. The way light falls through a
                            window...
                        </p>
                        <x-profile-actions />
                    </div>

                    <!-- Repost Post -->
                    <div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
                        <div class="flex items-center gap-2 text-green-500 font-semibold text-sm mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span>Reposted by Ozu</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50">
                                <img src="https://media.mutualart.com/Images/2021_09/16/06/062056199/74f4bbf5-c7fd-42a3-9e70-1719fb282836.Jpeg"
                                    class="w-full h-full object-cover" alt="User Avatar" />
                            </div>
                            <div class="ml-3">
                                <div class="text-gray-100 font-medium">Akira<span
                                        class="text-gray-400 text-sm font-normal">@Akira_Kurosawa</span></div>
                                <div class="text-gray-400 text-sm">1 day ago</div>
                            </div>
                        </div>
                        <p class="mb-6 text-gray-200 leading-relaxed">
                            Movie directors, or should I say people who create things, are very greedy and they can
                            never be satisfied…
                        </p>
                        <x-profile-actions :retweeted="true" />
                    </div>
                </div>

                <!-- Replies and Likes Sections -->
                @include('profile.replies', ['user' => $user])
                @include('profile.likes', ['user' => $user])

            </div>
        </div>

        <!-- JavaScript for Tab Functionality -->
        <script>
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            function activateTab(tabName) {
                tabBtns.forEach(b => {
                    b.classList.remove('border-blue-500', 'text-blue-400');
                    b.classList.add('border-transparent', 'text-gray-400');
                });
                tabContents.forEach(content => {
                    content.classList.remove('active');
                });

                const btn = document.querySelector(`.tab-btn[data-tab="${tabName}"]`);
                if (btn) {
                    btn.classList.remove('border-transparent', 'text-gray-400');
                    btn.classList.add('border-blue-500', 'text-blue-400');
                }
                const content = document.getElementById(`${tabName}-content`);
                if (content) {
                    setTimeout(() => {
                        content.classList.add('active');
                    }, 100);
                }
            }

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetTab = btn.getAttribute('data-tab');
                    activateTab(targetTab);

                    const username = 'ozu';
                    let newUrl = `/profile/${username}`;
                    if (targetTab !== 'posts') {
                        newUrl += `/${targetTab}`;
                    }
                    history.pushState(null, '', newUrl);
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                const pathParts = window.location.pathname.split('/').filter(Boolean);

                let activeTab = 'posts';
                if (pathParts.length >= 3) {
                    const possibleTab = pathParts[2];
                    if (['posts', 'replies', 'likes'].includes(possibleTab)) {
                        activeTab = possibleTab;
                    }
                }
                activateTab(activeTab);
            });

            const heartBtns = document.querySelectorAll('.heart-animation');
            heartBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    btn.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        btn.style.transform = 'scale(1)';
                    }, 200);
                });
            });

            const followButton = document.getElementById('followButton');

            // Function to toggle Follow/Unfollow
            function toggleFollow() {
                if (followButton.textContent === 'Follow') {
                    followButton.textContent = 'Following';
                    followButton.classList.add('bg-gray-600'); // Change color to gray
                } else {
                    followButton.textContent = 'Follow';
                    followButton.classList.remove('bg-gray-600');
                }
            }

            // Add event listener to the Follow button
            followButton.addEventListener('click', toggleFollow);

            // Hide the button if the user is on their own profile
            const currentUser = 'ozu'; // Example user (replace with dynamic user data)
            const profileUsername = window.location.pathname.split('/')[2]; // Get username from the URL

            if (currentUser === profileUsername) {
                followButton.style.display = 'none'; // Hide button if it's the user's own profile
            }

        </script>
    </div>
</x-layouts.default>