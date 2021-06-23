<section class="text-white bg-gray-800">  

    <div class="w-full px-6 pt-12 text-center">
        <h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Exhibitors</h3> 
    </div>
    
    <div class="container mx-auto px-6 mt-6">

        <!-- Slider main container -->
        <div class="swiper-container h-48">
            
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                
                <!-- Slides -->
                @foreach($exhibitors as $exhibitor)
                    <div class="swiper-slide">

                        <div class="bg-white rounded-md object-cover object-center overflow-hidden">
                            <picture>
                                <source srcset="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.webp" type="image/webp">
                                <source srcset="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.png" type="image/png"> 
                                <img src="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.png" alt="{{ $page->name }}" class="mx-auto">
                            </picture>
                        </div>

                    </div>
                @endforeach
               
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="w-full flex justify-center pt-6 pb-12">
    
        <a href="/exhibitors" class="btn btn-blue">
            <div>Find out more</div>
            <div>
                <svg class="fill-current text-white inline-block h-6 w-4">
                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                </svg>
            </div>
        </a>

    </div>
    
</section>