<x-guest-layout>
    <div class="fixed bg-no-repeat bg-auto md:bg-cover" style="background-image: url('bg.png')">    
        <div class="relative flex justify-center w-screen h-screen">
            <div class="absolute z-50 flex flex-row items-center w-full h-24 space-x-10 bg-white border-b-4 border-yellow-600">
                <div class="flex justify-start pl-40">
                    <div class="flex-shrink-0">
                        <a href="{{ url('/') }}">
                            <img src="logo.png" class="block w-auto h-9" />
                        </a>
                    </div>
                </div>
                <div class="flex justify-end flex-grow">
                    <div class="flex items-center justify-start w-full h-12 pl-20 space-x-10 text-yellow-600 bg-black">
                        <a class="text-2xl font-bold focus:text-white hover:text-white" href="">HOME</a>
                        <a class="text-2xl font-bold focus:text-white hover:text-white" href="">OUR WORKS</a>
                        <a class="text-2xl font-bold focus:text-white hover:text-white" href="">OUR CLIENTS</a>
                        <a class="text-2xl font-bold focus:text-white hover:text-white" href="">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>