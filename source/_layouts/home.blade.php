<!DOCTYPE html>
<html lang="en">
    <head>
         @include('_partials/meta')
    </head>
    <body class="antialiased font-sans">
        
        <section class="text-white bg-gray-900 bg-center bg-cover xl:bg-fixed hero">  
            <div class="absolute w-full z-50" x-data="{ open: false }">
                <div class="fixed w-full pb-4 bg-gray-900 shadow-lg">
                    @include('_partials/navigation')
                </div>
            </div>
               
            <div class="container mx-auto">
                <div class="flex px-5 pt-32 lg:pt-48 pb-24 md:flex-row flex-col items-center z-50">
                    <div class="lg:flex-grow md:max-w-xl md:pr-16 flex flex-col md:items-start md:text-left md:ml-6 mb-12 md:mb-0 items-center text-center">
                        <h1 class="uppercase font-semibold leading-tight font-medium text-white">
                            <span class="text-xl md:text-2xl lg:text-3xl tracking-tight text-blue-500">Welcome to</span>
                            <span class="block md:-mt-2 lg:-mt-1 text-4xl md:text-5xl lg:text-6xl tracking-tighter">Air User Live</span>                           
                        </h1>
                        <p class="mb-4 text-md md:text-lg font-semibold leading-relaxed tracking-tight">
                           1st December 2021 - Ricoh Arena, Coventry
                        </p>
                        <div class="flex justify-center">
                            <a href="{{ $page->resourcePath('/why-visit') }}" class="btn btn-blue mr-1">
                                <div>Visit</div>
                                <div>
                                    <svg class="fill-current text-white inline-block h-6 w-4">
                                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                    </svg>
                                </div>
                            </a>

                            <a href="{{ $page->resourcePath('/why-exhibit') }}" class="btn btn-gray">
                                <div>Exhibit</div>
                                <div>
                                    <svg class="fill-current text-white inline-block h-6 w-4">
                                        <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                    </svg>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </section>

        @yield('content')

        @include('_partials/footer')
    </body>
</html>
