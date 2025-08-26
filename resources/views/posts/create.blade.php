<x-layouts.default>

    <div
        class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 flex flex-col items-center justify-center px-4">

        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-100 mb-3 tracking-wide">New Post</h1>
            <p class="text-gray-400 text-lg">Share your thoughts with the world</p>
        </div>

        <div
            class="w-full max-w-2xl bg-gray-900/70 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-8 shadow-2xl">
            <form>
                <div class="mb-6">
                    <textarea
                        class="w-full h-60 bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 rounded-xl p-4 resize-none outline-none focus:border-blue-500/70 focus:bg-gray-800/70 transition-all duration-300"
                        spellcheck="false" placeholder="What's on your mind? Share your thoughts, ideas, or stories..."
                        oninput="updateCharCount(this)"></textarea>
                </div>


                <div class="flex justify-end mb-6">
                    <div class="text-gray-400 text-sm font-medium">
                        <span id="charCount">0</span><span class="text-gray-500">/300</span>
                    </div>
                </div>

                <div class="flex justify-end space-x-4">
                    <a href="/">
                        <button type="button"
                            class="bg-gray-700/50 text-gray-300 border border-gray-600/50 hover:bg-gray-600/60 hover:border-gray-500/60 px-6 py-3 rounded-xl font-medium transition-all duration-300">
                            Cancel
                        </button>
                    </a>
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-500 hover:to-blue-600 px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        Post
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateCharCount(textarea) {
            const charCount = textarea.value.length;
            const charCountElement = document.getElementById('charCount');
            charCountElement.textContent = charCount;

            // Change color based on character count
            if (charCount > 250) {
                charCountElement.className = 'text-red-400';
            } else if (charCount > 200) {
                charCountElement.className = 'text-yellow-400';
            } else {
                charCountElement.className = 'text-gray-400';
            }
        }
    </script>

</x-layouts.default>