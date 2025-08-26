<x-layouts.auth>

    <x-slot name="leftSide">
        <div class="flex flex-col items-center space-y-4 mt-8 px-6">
            <p class="text-gray-300 text-lg font-medium">Don't have an account?</p>
            <a href="/register">
                <button
                    class="border-2 border-gray-500/50 text-gray-300 bg-gray-800/30 rounded-lg px-6 py-2 hover:bg-gray-700/50 hover:border-gray-400 transition-all duration-300 font-medium backdrop-blur-sm">
                    Sign Up
                </button>
            </a>
        </div>
    </x-slot>

    <div class="block md:hidden mb-6 text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Wing Logo"
            class="mx-auto w-20 h-auto filter brightness-110 drop-shadow-lg" />
    </div>


    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-100 mb-3 tracking-wide">Welcome Back</h1>
        <p class="text-gray-400 py-2 text-lg">Sign in to continue your journey</p>
    </div>

    <form>
        <div class="mb-6 px-3">
            <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Email</label>
            <input type="email" name="email" placeholder="ahmed@example.com"
                class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
        </div>

        <div class="mb-8 px-3">
            <label class="text-sm font-semibold px-1 text-gray-300 uppercase tracking-wide">Password</label>
            <input type="password" name="password" placeholder="Enter your password"
                class="w-full px-4 py-4 mt-3 rounded-xl bg-gray-800/50 backdrop-blur-sm border-2 border-gray-600/50 text-gray-100 placeholder-gray-400 focus:border-blue-800 focus:bg-gray-800/70 outline-none transition-all duration-300">
        </div>

        <div class="px-3">
            <button type="submit"
                class="w-full bg-gradient-to-r from-gray-700 to-blue-900 text-gray-100 rounded-xl px-4 py-4 font-semibold hover:from-gray-600 hover:to-blue-800 transition-all duration-300 shadow-xl transform hover:scale-105">
                Take Flight →
            </button>
        </div>

        <div class="block md:hidden mt-4 text-center text-gray-400 text-sm">
            Don't have an account?
            <a href="/register" class="text-blue-500 hover:underline font-semibold">Sign up</a>
        </div>


    </form>

</x-layouts.auth>