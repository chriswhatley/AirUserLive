@extends('_layouts.home', ['nav_selector' => false, 'meta_title' => 'Air User Live - 1st December 2021 - Ricoh Arena, Coventry', 'meta_description' => 'Brought to you by the team behind IPE and publishers of the highly regarded annual AirUser Guide, AirUser Live is a FREE-TO-ATTEND one day conference aimed at end user air power professionals.' ])

@section('content')

	<main class="z-20">
		
		<section class="relative bg-no-repeat bg-center lg:bg-left bg-contain text-gray-900">      
            <div class="container mx-auto px-10">
                <div class="py-12 w-full lg:w-1/2 lg:pr-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    About <br /> AirUser Live
	                </h2>                        
                    <p class="leading-relaxed">The AirUser Live Conference has been launched to provide exclusive access to the latest industry updates and to help tackle the concern of the end user Air Powered systems professional.</p>
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
                    
            <div class="hidden lg:block absolute top-0 right-0 h-full w-1/2 bg-cover intro"></div>                                                                 
        </section>

        <section class="text-white">
    		<div class="flex flex-wrap">

    			<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-1 why-visit"></div>

    			<div class="w-full md:w-1/2 lg:w-1/4 bg-gray-800 p-10 md:order-2">
    				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Visit</h3> 
                    <p class="leading-relaxed">While the past year has seen us all embrace digital communication, there's nothing quite like live face-to-face events.</p>
                    <p class="leading-relaxed">AirUser Live will be the 2021's only live UK event for the compressed air market, offering visitors a unique opportunity to network and reconnect with the sector's major players and industry bodies.</p>
    				<a href="/why-visit" class="btn btn-blue mt-4">
    					<div>Find Out More</div>
    					<div>
    						<svg class="fill-current text-white inline-block h-6 w-4">
    							<path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
    						</svg>
    					</div>
    				</a>
    			</div>

				<div class="w-full h-56 md:h-auto md:w-1/2 lg:w-1/4 bg-gray-400 bg-center bg-cover md:order-4 lg:order-3 why-exhibit"></div>        			
    			
    			<div class="w-full md:w-1/2 lg:w-1/4 bg-gray-800 p-10 md:order-3 lg:order-4">
    				<h3 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Why Exhibit</h3> 
    				<p class="leading-relaxed">2021's only live UK event dedicated to the compressed air market, AirUser Live will provide the ideal opportunity for exhibitors to connect with a specially selected audience of business decision-makers.</p>
                    <p class="leading-relaxed">The event will be extensively marketed to a highly relevant audience by the team behind Industrial Plant & Equipment magazine and the highly successful annual AirUser Guide. </p>
    				<a href="/why-exhibit" class="btn btn-blue mt-10">
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

        <section class="text-white bg-gray-900 bg-bottom bg-cover xl:bg-fixed feature-home">  
   
            <div class="flex py-12 flex-row flex-col items-center">
                <h2 class="text-center text-2xl md:text-5xl uppercase font-semibold leading-tight tracking-tight mb-2 font-medium"><span class="text-blue-500">AirUser</span> Live</h2>
                <p class="w-full text-center leading-relaxed font-semibold uppercase">1<span class="text-xs lowercase">st</span> December 2021 <br class="block md:hidden"> <span class="hidden md:inline-block"> | </span> Ricoh Arena, Coventry</p>

                <div class="flex flex-wrap w-full md:w-auto">

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="/assets/img/icons/user-feature-icon.svg" data-src="/assets/img/icons/user-feature-icon.svg" class="w-12 mx-auto md:w-20 lg:w-24 lazyload" alt="User Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-blue-500">30+</div>
                                    <div class="mt-2 lg:text-xl">Leading<br />Exhibitors</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24">
                                 <img src="/assets/img/icons/clock-feature-icon.svg" data-src="/assets/img/icons/clock-feature-icon.svg" class="w-12 mx-auto md:w-20 lazyload" alt="CLock Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-2 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-blue-500">6 <sup class="-ml-2 text-sm lg:text-xl">hours</sup></div>
                                    <div class="mt-2 lg:text-xl">Educational<br />content</div>
                                </div>                   
                            </div>
                        </div>
                    </div>

                    <div class="w-1/3 px-3 md:px-10">
                        <div class="w-full py-6 md:flex md:mx-auto items-center">
                            <div class="inline-block w-full md:w-20 lg:w-24 mx-auto">
                                 <img src="/assets/img/icons/education-feature-icon.svg" data-src="/assets/img/icons/education-feature-icon.svg" class="w-12 mx-auto md:w-20 lazyload" alt="Education Icon" />
                            </div>
                            <div class="flex flex-col mt-1 md:ml-1 text-white tracking-tight font-semibold uppercase">
                                <div class="w-full text-center leading-tight text-sm">
                                    <div class="text-3xl lg:text-6xl text-blue-500">6+</div>
                                    <div class="mt-2 lg:text-xl">Expert<br />Speakers</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ $page->registrationURL }}" class="btn btn-blue" rel="noopener" target="_blank">
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

       @include('_partials/exhibitors')

        <section class="relative bg-blue-500 bg-no-repeat bg-center lg:bg-left bg-contain text-white">      
            <div class="hidden md:block absolute top-0 left-0 h-full w-1/2 bg-cover bg-center register-home"></div>
            
            <div class="container mx-auto px-10">
                <div class="py-12 w-full md:w-1/2 md:ml-auto md:pl-12">                                                                                          
                    <h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">
	                    Register Your Interest
	                </h2>                        
                    <p class="leading-relaxed">AirUser Live, with its carefully curated seminar programme will bring together experts in the field, companies at the forefront of product and technological developments,and a select audience of attendees to inform, educate, debate and network.</p>
                    <div class="mt-6">
                    	<a href="{{ $page->registrationURL }}" class="btn btn-gray" target="_blank" rel="noopener">
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
