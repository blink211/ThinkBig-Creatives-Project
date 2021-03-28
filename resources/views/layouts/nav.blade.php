<nav class="absolute sticky z-50 w-full bg-white border-b border-white bg-opacity-90">
    <div class="hidden w-full lg:block prohide-p">
        <div class="flex flex-row items-center h-24">
            <div class="flex justify-start ml-6 lg:ml-20">
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}">
                        <x-jet-application-mark class="block w-auto h-9" />
                    </a>
                </div>
            </div>
            <div class="flex justify-end flex-grow">
                <div class="hidden inline-block px-10 py-1 space-x-8 bg-gray-300 border border-gray-400 rounded-l-xl lg:block prohide-p">
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('WEBSITES') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('GAMES') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('DIGITAL MARKETING') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('EVENTS') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('OUR COMPANY') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link class="font-semibold text-gray-900 uppercase" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('CONTACT US') }}
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>
    <div class="block w-full lg:hidden proshow-p">
        <div class="flex flex-row items-center h-24">
            <div class="flex justify-start ml-6 lg:ml-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block w-auto h-9" />
                    </a>
                </div>
            </div>
            <div class="flex justify-end flex-grow mr-6">
                <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500" onclick="toggleElement('navMenu')">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

            