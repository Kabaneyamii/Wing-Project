<x-layouts.default>

    <!-- Main page container with background and text color -->
    <div class="bg-gray-900 text-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto">

            <!-- Sticky top header with back button and page title -->
            <div class="sticky top-0 bg-gray-900/95 backdrop-blur-sm z-10 px-6 py-4 border-b border-gray-700">
                <div class="flex items-center gap-4">

                    <!-- Go back button -->
                    <a href="javascript:history.back()"
                        class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"
                        aria-label="Go back">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <!-- Page title -->
                    <h1 class="text-xl font-bold">Terms and Conditions</h1>
                </div>
            </div>

            <!-- Main content wrapper -->
            <div class="px-6 py-8 max-w-3xl mx-auto">

                <!-- Header section: last update and project note -->
                <div class="mb-8">
                    <p class="text-gray-400 mb-6">Last updated: August 20, 2025</p>

                    <!-- Informational banner about the project -->
                    <div class="bg-blue-900/20 border border-blue-600/30 rounded-lg p-4 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-blue-200 text-sm">
                                This is a learning project created for educational purposes. It's a simplified
                                Twitter-like social media platform.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Terms sections -->
                <div class="space-y-8 text-gray-200 leading-relaxed">

                    <!-- Purpose of the platform -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">Purpose</h2>
                        <p>
                            This platform is designed as an educational project to demonstrate social media
                            functionality. It allows users to share thoughts, follow others, and engage with content in
                            a Twitter-like environment.
                        </p>
                    </section>

                    <!-- User behavior guidelines -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">User Conduct</h2>
                        <p>By using this platform, you agree to:</p>
                        <ul class="list-disc list-inside mt-3 space-y-2 ml-4">
                            <li>Be respectful to other users</li>
                            <li>Not share harmful, offensive, or illegal content</li>
                            <li>Not spam or misuse the platform</li>
                            <li>Use appropriate language and maintain civil discourse</li>
                        </ul>
                    </section>

                    <!-- Content responsibility and moderation -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">Content</h2>
                        <p>
                            Users are responsible for their own content. We reserve the right to remove content that
                            violates these terms. All content shared on the platform should be original or properly
                            attributed.
                        </p>
                    </section>

                    <!-- Basic privacy and data use -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">Privacy</h2>
                        <p>
                            We collect basic information necessary for the platform to function (username, email,
                            posts). We do not share personal information with third parties. This is a learning project
                            with basic data protection measures.
                        </p>
                    </section>

                    <!-- Limitations and disclaimer -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">Limitations</h2>
                        <p>
                            This platform is provided "as is" for educational purposes. We make no warranties about
                            availability, security, or data persistence. Use at your own discretion.
                        </p>
                    </section>

                    <!-- Notice about changes to terms -->
                    <section>
                        <h2 class="text-2xl font-semibold text-gray-100 mb-4">Changes</h2>
                        <p>
                            We may update these terms as the project evolves. Continued use of the platform constitutes
                            acceptance of any changes.
                        </p>
                    </section>

                </div>

                <!-- Final section for user questions -->
                <div class="mt-12 p-6 bg-gray-800/50 rounded-lg border border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-100 mb-3">Questions?</h3>
                    <p class="text-gray-300">
                        If you have any questions about these terms, feel free to reach out. This is a learning project,
                        so feedback is always welcome!
                    </p>
                </div>

            </div>

        </div>
    </div>

</x-layouts.default>