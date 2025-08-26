@props([
    'retweeted' => false,
    'liked' => false,
])

@php
    $retweetClasses = $retweeted
        ? 'text-green-400 group-hover:text-green-400'
        : 'text-gray-400 hover:text-green-400';

    $likeClasses = $liked
        ? 'text-red-400 group-hover:text-red-400'
        : 'text-gray-400 hover:text-red-400';
@endphp

<div class="flex items-center justify-between pt-4 border-t border-gray-700/50">
    <div class="flex items-center space-x-6">
        <button class="flex items-center space-x-2 text-gray-400 hover:text-blue-400 transition-colors group">
            <div class="p-2 rounded-full group-hover:bg-blue-500/10 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
            </div>
            <span class="text-sm">8</span>
        </button>

        <button class="flex items-center space-x-2 {{ $retweetClasses }} transition-colors group">
            <div class="p-2 rounded-full group-hover:bg-green-500/10 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                    </path>
                </svg>
            </div>
            <span class="text-sm">15</span>
        </button>

        <button class="flex items-center space-x-2 {{ $likeClasses }} transition-colors group heart-animation">
            <div class="p-2 rounded-full group-hover:bg-red-500/10 transition-colors">
<svg class="w-5 h-5" fill="{{ $liked ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
            </div>
            <span class="text-sm">42</span>
        </button>
    </div>

    <div class="flex items-center space-x-2">
        <button class="text-gray-400 hover:text-yellow-400 p-2 rounded-full hover:bg-yellow-500/10 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>
        </button>

        <button class="text-gray-400 hover:text-gray-200 p-2 rounded-full hover:bg-gray-700/50 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                </path>
            </svg>
        </button>
    </div>
</div>
