@extends('_layouts.master', 
	['page_title' => 'FAQs', 
	'nav_selector' => 'visit', 
	'meta_title' => 'Air User Live FAQs', 
	'meta_description' => 'When and where, getting to the Ricoh Arena, parking, catering and more'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-5">

    		<div class="w-full md:w-1/2 md:pr-10">
				
				<h3 class="pb-1 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Where &amp; When:</h3>
				
				<div class="flex mt-3">
					<div class="w-1/2">
						<p class="eading-relaxed">
							Ricoh Arena<br />
							Judds Lane<br />
							Longford<br />
							Coventry<br />
							CV6 6GE
						</p>
					</div>
					<div class="w-1/2">
						<p class="leading-relaxed">
							1st December 2021<br />
							09:00 - 17:00
						</p>
					</div>
				</div>
				
				<div class="mt-6">
					<h3 class="pb-1 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Getting to the Ricoh:</h3>
					<p class="mt-3 leading-relaxed">Situated in the heart of the UK the Ricoh Arena is within two hour drive of 75% of the population. 800 yards from junction 3 of the M6 and within easy distance of the M1 and M40.</p>
					<p class="mt-3 leading-relaxed">We have 2,000 on site car parking spaces. Easy access makes the Ricoh Arena an ideal destination, with three train stations within 8 miles, Birmingham International Airport only a 20 minute drive away and London Euston 55 minutes by train.</p> 

					<div class="mt-6">
		            	<a href="https://www.ricoharena.com/visiting-us/getting-here/#Gettinghere" target="_blank" class="btn btn-blue">
		                    <div>Find out more</div>
		                    <div>
		                        <svg class="fill-current text-white inline-block h-6 w-4">
		                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
		                        </svg>
		                    </div>
		                </a>
		            </div>
				</div>
	        </div>

	        <div class="w-full md:w-1/2 mt-6 md:mt-0">
				@include('_partials/map')
	        </div>

	        <div class="mt-10 w-full">
	        	<h3 class="pb-1 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">Parking:</h3>
				<p class="leading-relaxed">The Ricoh Arena boasts three on-site car parks with a total of 2,000 spaces available to visiting guests. All of our car parks are within close proximity of the venue’s main North and South entrances.</p>
				<p class="mt-3 leading-relaxed font-semibold">Parking is free for all delegates.</p>
				<p class="mt-3 leading-relaxed">Also available on-site is catering, WiFi &amp; cloakroom.</p>
	        </div>

		</div>		
	</div>
	
	@include('_partials/parallax-visit')
	@include('_partials/feature-visit')


	
@endsection