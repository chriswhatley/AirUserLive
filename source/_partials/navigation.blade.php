<div class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row">
    <div class="p-2 flex flex-row items-center justify-between">
        <a href="{{ $page->baseUrl }}" class="">
            <img class="pt-4 h-auto w-56 lg:w-72" src="{{ $page->resourcePath('/assets/img/layout/air-user-live-2021-logo.svg') }}" alt="{{ $page->siteName }}">
        </a>
        <button aria-label="Small screen navigation" class="md:hidden rounded-lg focus:outline-none focus:shadow-outline-none" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
   {{--  <div class="mt-2">
        <div class="flex">
            <div class="hidden md:block md:w-full md:pr-2 md:py-2 md:flex md:flex-row md:justify-end">
                <a class="flex w-6" href="https://www.linkedin.com/company/tomorrows-warehouse" target="_blank">
                   <img src="{{ $page->resourcePath('/assets/img/icons/linkedin-icon.svg') }}" alt="LinkedIn">
                </a>
                <a class="flex w-6 ml-2" href="https://twitter.com/TmrwsWarehouse" target="_blank">
                    <img src="{{ $page->resourcePath('/assets/img/icons/twitter-icon.svg') }}" alt="Twitter">
                </a>
            </div>
        </div> --}}
            
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row" @click.away="open = false">
            <div @click.away="open = false" x-on:keydown.escape="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="nav-item flex flex-row items-center w-full md:w-auto md:inline md:mt-0 md:ml-4 focus:outline-none focus:border-blue-500 focus:shadow-outline-none {{ isSet($nav_selector) && $nav_selector == 'visit' ? 'selected' : '' }}">
                    <span class="z-0">Visit</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 z-40 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow text-gray-900">
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/why-visit') }}">Why Visit</a>
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/faq') }}">FAQs</a>
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/exhibitors') }}">Exhibitor List</a>
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/contact') }}">Contact</a>
                    </div>
                </div>
            </div>
            <div @click.away="open = false" x-on:keydown.escape="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="nav-item flex flex-row items-center w-full md:w-auto md:inline md:mt-0 md:ml-4 focus:outline-none focus:border-blue-500 focus:shadow-outline-none {{ isSet($nav_selector) && $nav_selector == 'exhibit' ? 'selected' : '' }}">
                    <span class="z-0">Exhibit</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 z-40 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow text-gray-900">
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/why-exhibit') }}">Why Exhibit</a>
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/exhibitors') }}">Exhibitor List</a>
                        <a class="nav-dropdown-item md:mt-0" href="{{ $page->resourcePath('/contact') }}">Contact</a>
                    </div>
                </div>
            </div>  

            <a class="nav-item md:mt-0 md:ml-4 {{ isSet($nav_selector) && $nav_selector == 'seminars' ? 'selected' : '' }}" href="{{ $page->resourcePath('/seminars') }}">Seminars</a>
            <a class="nav-item md:mt-0 md:ml-4" href="{{ $page->registrationURL }}" target="_blank" rel="noopener">Register</a> 
        </nav>
    {{-- </div> --}}
   
</div>