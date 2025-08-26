<x-layouts.default>

    <!-- Back Button -->
    <a href="javascript:history.back()"
        class="fixed top-6 left-6 w-10 h-10 bg-gray-800/70 hover:bg-gray-700 rounded-full flex items-center justify-center shadow-lg transition-colors z-50"
        aria-label="Go back">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </a>

    <!-- Home Button -->
    <a href="/"
        class="fixed top-5 right-8 w-11 h-11 bg-gray-800/70 hover:bg-gray-700 rounded-full flex items-center justify-center shadow-lg transition-colors z-50"
        aria-label="Go home">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4 10v10h5v-6h6v6h5V10" />
        </svg>
    </a>

    <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen">
        <!-- Main content -->
        <div class="max-w-[calc(100vw-32px)] mx-auto px-4 sm:max-w-4xl sm:px-6 lg:px-8 pt-8 pb-12">
            <!-- Page Header -->
            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-500/20 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-100">Notifications</h1>
                            <p class="text-gray-400 text-sm">Stay updated with your latest activity</p>
                        </div>
                    </div>
                    <button id="markAllRead"
                        class="bg-blue-600/20 hover:bg-blue-600/30 text-blue-400 hover:text-blue-300 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 border border-blue-500/20">
                        Mark all as read
                    </button>
                </div>
            </div>

            <!-- Notifications Filter Tabs -->
            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-2 mb-6">
                <div class="flex space-x-2">
                    <button
                        class="filter-tab active px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 bg-blue-600/20 text-blue-300 border border-blue-500/20"
                        data-filter="all">
                        All Notifications
                    </button>
                    <button
                        class="filter-tab px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 text-gray-400 hover:text-gray-200 hover:bg-gray-700/30"
                        data-filter="unread">
                        Unread
                    </button>
                </div>
            </div>

            <!-- Notifications List -->
            <div class="space-y-4" id="notificationsList">
                <!-- Like notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300 unread likes"
                    data-type="like">
                    <a href="/post/123" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://media.mutualart.com/Images/2021_09/16/06/062056199/74f4bbf5-c7fd-42a3-9e70-1719fb282836.Jpeg"
                                alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">
                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-red-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Akira</span>
                                <span class="text-gray-400 text-sm">@Akira_Kurosawa</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">liked your post</p>
                            <p class="text-gray-400 mt-1 text-sm line-clamp-2">In my films, I try to capture the beauty
                                of everyday moments. The way light falls through a window...</p>
                            <p class="text-gray-500 mt-2 text-xs">2 minutes ago</p>
                        </div>
                        <div class="w-3 h-3 bg-blue-500 rounded-full flex-shrink-0 unread-indicator"></div>
                    </a>
                </div>

                <!-- Reply notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300 unread replies"
                    data-type="reply">
                    <a href="/post/124" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://images.mubicdn.net/images/cast_member/4778/cache-90078-1426139760/image-w856.jpg?size=300x"
                                alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">
                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Kiyoshi</span>
                                <span class="text-gray-400 text-sm">@Kiyoshi Kurosawa</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">replied to your post</p>

                            <p class="text-gray-400 mt-1 text-sm line-clamp-2">Your thoughts on Miyazaki’s narrative
                                style are spot on. The emotional depth really resonates.</p>
                            <p class="text-gray-500 mt-2 text-xs">15 minutes ago</p>
                        </div>
                        <div class="w-3 h-3 bg-blue-500 rounded-full flex-shrink-0 unread-indicator"></div>
                    </a>
                </div>

                <!-- Mention notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300 unread"
                    data-type="mention">
                    <a href="/post/125" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://p2.itc.cn/images01/20210524/629334928927496b942f5af69194dee6.jpeg" alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">

                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-yellow-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Koreeda</span>
                                <span class="text-gray-400 text-sm">@Hirokazu_Koreeda</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">mentioned you in a post</p>
                            <p class="text-gray-400 mt-1 text-sm line-clamp-2">@Yasujiro_Ozu Have you seen the latest
                                restoration of my classic? Would love your thoughts.</p>
                            <p class="text-gray-500 mt-2 text-xs">1 hour ago</p>
                        </div>
                        <div class="w-3 h-3 bg-blue-500 rounded-full flex-shrink-0 unread-indicator"></div>
                    </a>
                </div>

                <!-- Repost notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300"
                    data-type="retweet">
                    <a href="/post/126" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://media.vanityfair.com/photos/657206ca645a61d58abb7f6d/master/w_1920,c_limit/FYC-0124-Hayao-Miyazaki.jpg"
                                alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">
                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-purple-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Hayao</span>
                                <span class="text-gray-400 text-sm">@Hayao_Miyazaki</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">reposted your post</p>
                            <p class="text-gray-400 mt-1 text-sm line-clamp-2">In my films, I try to capture the beauty
                                of everyday moments. The way light falls through a window...</p>
                            <p class="text-gray-500 mt-2 text-xs">3 hours ago</p>
                        </div>
                    </a>
                </div>

                <!-- Bookmark notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300"
                    data-type="bookmark">
                    <a href="/post/127" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://bronzescreendream.com/wp-content/uploads/2023/10/naomikawase-.jpeg" alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">
                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-orange-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-orange-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Naomi</span>
                                <span class="text-gray-400 text-sm">@Naomi_Kawase</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">bookmarked your post</p>
                            <p class="text-gray-400 mt-1 text-sm line-clamp-2">In my films, I try to capture the beauty
                                of everyday moments. The way light falls through a window...</p>
                            <p class="text-gray-500 mt-2 text-xs">5 hours ago</p>
                        </div>
                    </a>
                </div>

                <!-- Follow notification -->
                <div class="notification-item bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl hover:bg-gray-800/70 hover:border-gray-600/50 transition-all duration-300 follows"
                    data-type="follow">
                    <a href="/profile/naoko" class="flex items-start p-6 space-x-4">
                        <div class="flex-shrink-0 relative">
                            <img src="https://thecinemaarchives.com/wp-content/uploads/2020/05/edward-yang-director-asdfdasfadsfdsa.jpg"
                                alt=""
                                class="w-12 h-12 object-cover rounded-full overflow-hidden ring-2 ring-gray-600/50">
                            <div
                                class="absolute -bottom-1 -right-1 w-6 h-6 bg-indigo-500/20 rounded-full flex items-center justify-center border-2 border-gray-800">
                                <svg class="w-3 h-3 text-indigo-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-200">
                                <span class="font-semibold">Edward</span>
                                <span class="text-gray-400 text-sm">@Edward_Yang</span>
                            </p>
                            <p class="text-gray-300 text-base font-medium mt-1">started following you</p>
                            <p class="text-gray-400 mt-1 text-sm">Filmmaker exploring the unseen rhythms of urban life
                                and human connection.</p>
                            <p class="text-gray-500 mt-2 text-xs">1 day ago</p>
                        </div>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 flex-shrink-0">
                            Follow Back
                        </button>
                    </a>
                </div>
            </div>


            <!-- Load More Button -->
            <div class="text-center mt-8">
                <button
                    class="bg-gray-800/50 hover:bg-gray-800/70 border border-gray-700/50 hover:border-gray-600/50 text-gray-300 hover:text-gray-100 px-6 py-3 rounded-xl font-medium transition-all duration-300">
                    Load More Notifications
                </button>
            </div>
        </div>

        <script>
            // Filter functionality
            const filterTabs = document.querySelectorAll('.filter-tab');
            const notifications = document.querySelectorAll('.notification-item');

            filterTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active state from all tabs
                    filterTabs.forEach(t => {
                        t.classList.remove('active', 'bg-blue-600/20', 'text-blue-300', 'border', 'border-blue-500/20');
                        t.classList.add('text-gray-400', 'hover:text-gray-200', 'hover:bg-gray-700/30');
                    });

                    // Add active state to clicked tab
                    tab.classList.add('active', 'bg-blue-600/20', 'text-blue-300', 'border', 'border-blue-500/20');
                    tab.classList.remove('text-gray-400', 'hover:text-gray-200', 'hover:bg-gray-700/30');

                    const filter = tab.dataset.filter;

                    notifications.forEach(notification => {
                        if (filter === 'all') {
                            notification.style.display = 'block';
                        } else if (filter === 'unread') {
                            notification.style.display = notification.classList.contains('unread') ? 'block' : 'none';
                        } else {
                            notification.style.display = notification.classList.contains(filter) ? 'block' : 'none';
                        }
                    });
                });
            });

            // Mark all as read functionality
            document.getElementById('markAllRead').addEventListener('click', () => {
                const unreadIndicators = document.querySelectorAll('.unread-indicator');
                const unreadNotifications = document.querySelectorAll('.notification-item.unread');

                unreadIndicators.forEach(indicator => {
                    indicator.remove();
                });

                unreadNotifications.forEach(notification => {
                    notification.classList.remove('unread');
                });

                // Update the button text temporarily
                const button = document.getElementById('markAllRead');
                const originalText = button.textContent;
                button.textContent = 'All marked as read';
                button.classList.add('opacity-60');

                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('opacity-60');
                }, 2000);
            });

            // Add click animation to notifications
            notifications.forEach(notification => {
                notification.addEventListener('click', () => {
                    notification.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        notification.style.transform = 'scale(1)';
                    }, 100);
                });
            });
        </script>

        <style>
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    </div>


</x-layouts.default>