@extends('_layouts.master', 
	['page_title' => 'Why Visit', 
	'nav_selector' => 'visit', 
	'meta_title' => 'Why Visit Air User Live', 
	'meta_description' => 'Brought to you by the team behind IPE and publishers of the highly regarded annual AirUser Guide, AirUser Live is a FREE-TO-ATTEND one day conference aimed at end user air power professionals.',
	'partial' => 'parallax-visit'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-5">

    		<div class="md:w-1/2 md:pr-10">  
				<h2 class="pb-4 text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight">Visiting Air User Live</h2> 
    			<p class="leading-relaxed">
    				While the past year has seen us all embrace digital communication, there's nothing quite like live face-to-face events. AirUser Live will be the 2021's only live UK event for the compressed air market, offering visitors a unique opportunity to network and reconnect with the sector's major players and industry bodies.
    			</p>
				
				<div class="bg-gray-800 mt-4 p-6  font-semibold text-md uppercase text-center text-white rounded">
					<span class="block text-2xl">Save the date</span>
					<span class="block mt-3 text-md">1st December, 2021 at the Ricoh Arena - Coventry</span>
				</div>
				
				<p class="mt-4 leading-relaxed">
					As well as a comprehensive seminar programme including keynote sessions from the British Compressed Air Society and the British Compressed Gases Association, the event will feature a tabletop exhibition, giving visitors the opportunity to discover all the latest products and services under one roof.
				</p>
				<p class="mt-4 leading-relaxed">
					Free-to-attend, AirUser Live will be held at the Ricoh Arena, Coventry. Located in the heart of the country, a stone's throw from Birmingham, Coventry's accessibility is second to none, offering easy links to London and International airports.
				</p>

				<div class="mt-6">
                	<a href="{{ $page->registrationURL }}" target="_blank" class="btn btn-blue">
                        <div>Register Now</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a>
                </div>
    		</div>

    		<div class="hidden md:block md:w-1/2 bg-center bg-cover rounded overflow-hidden why-visit"></div>
		</div>
	</div>
	
	@include('_partials/parallax-visit')
	@include('_partials/feature-visit')


	
@endsection