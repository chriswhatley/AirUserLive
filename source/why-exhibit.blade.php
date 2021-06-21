@extends('_layouts.master', ["page_title" => "Why Exhibit", "nav_selector" => "exhibit", 'meta_title' => 'Why exhibit at Tomorrow\'s Warehouse', 'meta_description' => 'Guarantee your exhibitor/sponsor presence at the Tomorrow`s Warehouse Event and secure your company`s opportunity to engage with Warehouse, Logistics, Distribution, Operations, Production & Facilities Managers & Directors, together with Buyers and Health & Safety professionals looking to make informed decisions for their logistical processes.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-5 md:px-12">

    		<div class="w-full md:w-1/2 pr-10">
				<h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Exhibiting at Air User Live</h2>
    			<p class="leading-relaxed">
    				2021's only live UK event dedicated to the compressed air market, AirUser Live will provide the ideal opportunity for exhibitors to connect with a specially selected audience of business decision-makers.
    			</p>
    			<p class="leading-relaxed">
					The event will be extensively marketed to a highly relevant audience by the team behind Industrial Plant & Equipment magazine and the highly successful annual AirUser Guide. 
				</p>
				<p class="leading-relaxed">
					In addition to showcasing all their latest products and services via the tabletop exhibition, exhibitors will be afforded a unique opportunity to meet prospective clients and catch up with existing contacts, while all the time raising their profile within the compressed air sector.
				</p>
				<p class="leading-relaxed">
					For exhibitors investing in one of the comprehensive sponsorship packages, there is also the opportunity to present as part of the seminar programme and put forward a representative to speak on the roundtable panel.
				</p>
				<div class="mt-6">
                	<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-blue">
                        <div>Contact the sales team</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>
    		</div>

    		<div class="hidden md:block md:w-1/2 bg-center bg-cover rounded why-exhibit"></div>
		</div>
	</div>
	
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-exhibit')

@endsection