<header class="border-b border-gray-200 bg-white sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo Airbnb Style -->
            <a href="{{ route('home') }}" class="flex items-center">
                <svg class="w-8 h-8 text-rose-500 mr-2" fill="currentColor" viewBox="0 0 32 32">
                    <path d="M16 1c-1.663 0-3.262.906-4.254 2.4L2.454 17.6c-.662 1.006-.662 2.394 0 3.4.663 1.006 1.813 1.6 3.054 1.6h1.292v6.4c0 1.325 1.075 2.4 2.4 2.4h13.6c1.325 0 2.4-1.075 2.4-2.4V22.6h1.292c1.241 0 2.391-.594 3.054-1.6.662-1.006.662-2.394 0-3.4L20.254 3.4C19.262 1.906 17.663 1 16 1zm0 2.4c.831 0 1.631.453 2.127 1.2l9.292 14.2c.331.503.331 1.197 0 1.7-.332.503-.906.8-1.527.8H6.108c-.621 0-1.195-.297-1.527-.8-.331-.503-.331-1.197 0-1.7l9.292-14.2c.496-.747 1.296-1.2 2.127-1.2zM14.4 20.2v9.6h3.2v-9.6h-3.2z"/>
                </svg>
                <span class="text-xl font-semibold text-rose-500">airbnb</span>
            </a>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                <!-- Language Selector -->
                <div class="flex space-x-2">
                    <a href="{{ route('locale.switch', 'ro') }}" 
                       class="px-3 py-1 rounded {{ app()->getLocale() == 'ro' ? 'bg-rose-500 text-white' : 'text-gray-600 hover:bg-gray-100' }} transition">
                        RO
                    </a>
                    <a href="{{ route('locale.switch', 'en') }}" 
                       class="px-3 py-1 rounded {{ app()->getLocale() == 'en' ? 'bg-rose-500 text-white' : 'text-gray-600 hover:bg-gray-100' }} transition">
                        EN
                    </a>
                </div>

                <a href="{{ route('contact') }}" class="text-sm text-gray-700 hover:bg-gray-100 px-3 py-2 rounded-full transition">
                    {{ __('messages.contact') }}
                </a>

                @auth
                    <!-- User Info -->
                    <div class="flex items-center space-x-3 border-l border-gray-300 pl-4">
                        <span class="text-sm text-gray-700">{{ __('messages.welcome') }}, <strong>{{ Auth::user()->name }}</strong></span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm text-rose-500 hover:text-rose-600 font-medium">
                                {{ __('messages.logout') }}
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="flex items-center space-x-2 border border-gray-300 rounded-full px-4 py-2 hover:shadow-md transition">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg class="w-7 h-7 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>