@props(['type' => 'regular', 'retweetedBy' => null, 'hideReply' => false])

<div
    class="max-w-[calc(100vw-32px)] sm:max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 m-6 bg-gray-900/50 p-4 pt-0.5 rounded-lg relative">


    @if($type === 'pinned')
        <div class="absolute top-4 left-4 flex items-center gap-2 text-blue-500 font-semibold text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.172 7l-6.586 6.586a2 2 0 01-2.828 0l-1.172-1.172a2 2 0 010-2.828L11 4.828a2 2 0 012.828 0l1.172 1.172a2 2 0 010 2.828z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13l6 6" />
            </svg>
            <span>Pinned Post</span>
        </div>
    @endif


    <div class="flex items-center mb-4 mt-6">
        <a href="/profile/Ozu" class="flex items-center">
            <div
                class="w-12 h-12 rounded-full overflow-hidden ring-2 ring-gray-600/50 group-hover:ring-gray-500/70 transition-all duration-300">
                <img src="https://miro.medium.com/v2/resize:fit:1100/format:webp/1*YhAj5sKA-QScSpxcO_AgLQ.jpeg"
                    class="w-full h-full object-cover" alt="User Avatar" />
            </div>
            <div class="ml-3">
                <div class="text-gray-100 font-medium">Ozu <span
                        class="text-gray-400 text-sm font-normal">@Yasujiro_Ozu</span></div>
                <div class="text-gray-400 text-sm">2 hours ago</div>
            </div>
        </a>
    </div>

    <a href="/posts/thread">
        <p class="mb-6 text-gray-200 leading-relaxed">
            Although I may seem the same to other people, to me each thing I produce is a new expression and I always
            make each work from a new interest. It's like a painter who always paints same rose.
        </p>
    </a>

    <div class="mt-4 pt-2 border-t border-gray-700/30 flex items-center justify-between flex-wrap gap-4">
        <div class="flex-shrink-0">
            <button
                class="bg-blue-600/20 text-blue-50 border border-blue-500/30 hover:bg-blue-600/30 hover:border-blue-400/50 px-4 py-2 rounded-lg transition-all duration-300 font-medium">
                Reply to Ozu
            </button>
        </div>

        <div class="flex-1 flex justify-end">
            <x-post-actions :isRetweet="$type === 'retweet'" />
        </div>
    </div>


</div>