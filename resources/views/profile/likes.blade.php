<div id="likes-content" class="tab-content max-w-4xl mx-auto px-6 pt-8 pb-6 space-y-6">

    <div class="bg-gray-900/50 p-6 rounded-lg border border-gray-700">
        <div class="flex items-center gap-2 text-red-400 font-semibold text-sm mb-4">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                </path>
            </svg>
            <span>Ozu liked</span>
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
            Movie directors, or should I say people who create things, are very greedy and they can never be
            satisfied… That’s why they can keep on working. I’ve been able to work for so long because I
            think next time, I’ll make something good.
        </p>

        <x-profile-actions :liked="true" />
    </div>

</div>