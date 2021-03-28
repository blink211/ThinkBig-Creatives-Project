<div id="navMenu" class="absolute z-50 hidden w-full bg-white bg-opacity-90">
    <div class="pt-2 pb-3 space-y-1 text-center border-b border-gray-300">
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('WEBSITES') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('GAMES') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('DIGITAL MARKETING') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('EVENTS') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('OUR COMPANY') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('CONTACT US') }}
        </x-jet-responsive-nav-link>
    </div>
    <div class="pt-2 pb-3 space-y-1 text-center border-b border-white prohide-p">
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('OVERVIEW') }}
        </x-jet-responsive-nav-link>
        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('PORTFOLIO') }}
        </x-jet-responsive-nav-link>
    </div>
</div>

<div class="absolute sticky z-30 w-full my-6">
    <div class="flex flex-row items-center w-full space-x-10">
        <div class="flex flex-row items-center flex-grow h-20 bg-white rounded-none lg:rounded-r-full bg-opacity-80">
            <div class="justify-start pl-6 text-4xl font-semibold text-blue-600 lg:pl-24">
                WEBSITE
            </div>
            <div class="flex flex-row justify-end flex-grow pr-6 space-x-20">
                <a href="#" class="hidden p-2 px-10 text-lg text-center text-white transform bg-blue-600 bg-opacity-75 border border-gray-400 rounded-full md:block hover:scale-105">OVERVIEW</a>
                <a href="#" class="hidden p-2 px-10 text-lg text-center text-white transform bg-blue-600 bg-opacity-75 border border-gray-400 rounded-full md:block hover:scale-105">PORTFOLIO</a>
            </div>
        </div>
        <div class="hidden lg:block prohide-p">
            <div class="flex flex-row items-center justify-end h-20 pl-6 pr-24 bg-white rounded-l-full bg-opacity-80">
                <a href="#" class="p-2 px-10 text-lg text-center text-white transform bg-blue-600 bg-opacity-75 border border-gray-400 rounded-full hover:scale-105">INQUIRE NOW</a>
            </div>
        </div>
    </div>
<div>