<x-layouts.default>

    <div
        class="min-h-screen flex items-center justify-center px-5 py-5 bg-gradient-to-br from-black via-gray-900 to-slate-900">
        <div
            class="bg-gray-800/40 backdrop-blur-lg rounded-3xl shadow-2xl border border-gray-600/30 w-full overflow-hidden max-w-4xl flex">
            <div class="rounded-3xl w-full overflow-hidden max-w-4xl flex">
                <div
                    class="hidden md:flex w-1/2 items-center justify-center bg-gradient-to-br from-gray-900/80 to-gray-800/80 backdrop-blur-sm">
                    <div class="flex flex-col items-center">

                        <h1 class="text-6xl font-bold text-gray-100 mb-6 tracking-wide font-serif">Wing</h1>
                        <img src="{{ asset('images/logo.png') }}" alt="Wing Logo"
                            class="w-60 h-auto filter brightness-110 drop-shadow-lg">
                        <p class="text-gray-300 text-sm mt-4 text-center px-6">Spread your thoughts, connect with the
                            world</p>

                        {{ $leftSide ?? '' }}
                    </div>
                </div>

                <div class="w-px bg-gradient-to-b from-transparent via-gray-500/50 to-transparent h-[700px]"></div>

                <div class="w-full md:w-1/2 p-10 bg-gray-900/80 backdrop-blur-sm">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</x-layouts.default>