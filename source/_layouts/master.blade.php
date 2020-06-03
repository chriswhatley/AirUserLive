<!DOCTYPE html>
<html lang="en">
    <head>
         @include('_partials/meta')
    </head>
    <body class="antialiased font-sans">
        
        <section class="text-white bg-gray-900 bg-center bg-cover xl:bg-fixed h-48 md:h-56 lg:h-64" style="background-image: url({{ $page->resourcePath('/assets/img/hero-2-no-overlay-compressed.jpg') }});">  
     
            <div class="absolute w-full z-50" x-data="{ open: false }">
                <div class="fixed w-full pb-4 bg-gray-900">
                    @include('_partials/navigation')
                </div>
            </div>
               
            <div class="container mx-auto">
                <div class="flex px-5 pt-32 lg:pt-40 pb-24 md:flex-row flex-col items-center z-50">
                    <div class="lg:flex-grow md:max-w-xl md:pr-16 flex flex-col md:items-start md:text-left md:ml-6 mb-16 md:mb-0 items-center text-center">
                        <h1 class="text-3xl md:text-4xl uppercase font-semibold leading-tight tracking-tight mb-4 font-medium text-white">
                            {{ $page_title }}
                        </h1>
                    </div>
                </div>
            </div>

        </section>

        @yield('content')

        @include('_partials/footer')
    </body>
</html>
