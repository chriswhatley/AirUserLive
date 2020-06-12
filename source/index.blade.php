@extends('_layouts.home', ['nav_selector' => false, 'meta_title' => 'Air User Live - June 10th 2021 - Ricoh Arena, Coventry', 'meta_description' => 'Brought to you by the team behind IPE and publishers of the highly regarded annual AirUser Guide, AirUser Live is a FREE-TO-ATTEND one day conference aimed at end user air power professionals.' ])

@section('content')

	<main class="z-20">
		
		<section class="relative bg-no-repeat bg-center lg:bg-left bg-contain text-gray-900">      
            <div class="container mx-auto px-10">
                <div class="py-12 w-full lg:w-1/2 lg:pr-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    About  <br /> Air User Live
	                </h2>                        
                    <p class="leading-relaxed">Brought to you by the team behind IPE and publishers of the highly regarded annual AirUser Guide, AirUser Live is a FREE-TO-ATTEND one day conference aimed at end user air power professionals.</p>
                    <div class="mt-6">
                    	<a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-blue" rel="noopener">
                            <div>Register Now</div>
                            <div>
                                <svg class="fill-current text-white inline-block h-6 w-4">
                                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                    
            <div class="hidden lg:block absolute top-0 right-0 h-full w-1/2 bg-cover" style="background-image: url(assets/img/intro-2-compressed.jpg);"></div>                                                                 
        </section>

        <section class="text-white">
        		<div class="flex flex-wrap">

        			<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-1" style="background-image: url(assets/img/why-visit-1-compressed.jpg);"></div>

        			<div class="w-full md:w-1/2 lg:w-1/4 bg-gray-800 p-10 md:order-2">
        				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Visit</h3> 
        				<p class="leading-relaxed">Widely regarded as a clean, safe energy source that can be readily used for a variety of different industrial purposes, there are however important issues associated with compressed air that users need to be well educated in.</p>
                        <p class="leading-relaxed">AirUser Live, with its carefully curated seminar programme will bring together experts in the field, companies at the forefront of product and technological developments, and a select audience of attendees to inform, educate, debate and network.</p>
        				<a href="{{ $page->resourcePath('/why-visit') }}" class="btn btn-blue mt-4">
        					<div>Find Out More</div>
        					<div>
        						<svg class="fill-current text-white inline-block h-6 w-4">
        							<path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
        						</svg>
        					</div>
        				</a>
        			</div>

					<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-4 lg:order-3" style="background-image: url(assets/img/why-exhibit-1-compressed.jpg);"></div>        			
        			
        			<div class="w-full md:w-1/2 lg:w-1/4 bg-gray-800 p-10 md:order-3 lg:order-4">
        				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Exhibit</h3> 
        				<p class="leading-relaxed">Secure your company's opportunity to engage with Warehouse, Logistics, Distribution, Operations, Production & Facilities Managers &amp; Directors, together with Buyers and Health &amp; Safety professionals looking to make informed decisions for their logistical processes.</p>
        				<a href="{{ $page->resourcePath('/why-exhibit') }}" class="btn btn-blue mt-10">
        					<div>Find Out More</div>
        					<div>
        						<svg class="fill-current text-white inline-block h-6 w-4">
        							<path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
        						</svg>
        					</div>
        				</a>
        			</div>

        		</div>
        </section>

        <section class="text-white bg-gray-900 bg-bottom bg-cover xl:bg-fixed" style="background-image: url(assets/img/feature-2-compressed.jpg);">  
   
            <div class="flex py-12 flex-row flex-col items-center">
                <h2 class="text-center text-2xl md:text-3xl uppercase font-semibold leading-tight tracking-tight mb-2 font-medium">Tomorrow's Warehouse</h2>
                <p class="w-full text-center leading-relaxed font-semibold uppercase">9<span class="text-xs lowercase">th</span> June 2021 <br class="block md:hidden"> <span class="hidden md:inline-block"> | </span> Ricoh Arena, Coventry</p>

                <div class="flex flex-wrap w-full md:w-auto">

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/user-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/user-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lg:w-24 lazyload" alt="User Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-red-500">30+</div>
                                    <div class="mt-2 lg:text-xl">Leading<br />Exhibitors</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/clock-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/clock-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lazyload" alt="CLock Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-red-500">6 <sup class="-ml-2 text-sm lg:text-xl">hours</sup></div>
                                    <div class="mt-2 lg:text-xl">Educational<br />content</div>
                                </div>                   
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24 mx-auto">
                                 <img src="{{ $page->resourcePath('/assets/img/icons/education-feature-icon.svg') }}" data-src="{{ $page->resourcePath('/assets/img/icons/education-feature-icon.svg') }}" class="w-12 mx-auto md:w-20 lazyload" alt="Education Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-1 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-red-500">6+</div>
                                    <div class="mt-2 lg:text-xl">Expert<br />Speakers</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ $page->registrationURL }}" class="btn btn-red" rel="noopener">
                        <div>Register Now</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>
        </section>

       @include('_partials/sponsors')

        <section class="relative bg-red-500 bg-no-repeat bg-center lg:bg-left bg-contain text-white">      
            <div class="hidden md:block absolute top-0 left-0 h-full w-1/2 bg-cover bg-center" style="background-image: url(assets/img/register-2-compressed.jpg);"></div>                                                                 

            <div class="container mx-auto px-10">
                <div class="py-12 w-full md:w-1/2 md:ml-auto md:pl-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    Register Your Interest
	                </h2>                        
                    <p class="leading-relaxed">Don't miss this free-to attend conference  tackling operational challenges in warehousing and logistics  at a time of unprecedented transformation.</p>
                    <div class="mt-6">
                    	<a href="https://www.eventbrite.co.uk/e/90942221633" class="btn btn-gray" target="_blank" rel="noopener">
                            <div>Register now</div>
                            <div>
                                <svg class="fill-current text-white inline-block h-6 w-4">
                                    <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div> 

        </section>

        @include('_partials/map')

	</main>

@endsection
