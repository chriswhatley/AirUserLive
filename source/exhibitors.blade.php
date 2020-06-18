@extends('_layouts.master', ['page_title' => 'Exhibitors', 'nav_selector' => 'visit', 'meta_title' => 'Tomorrow\'s Warehouse Exhibitors', 'meta_description' => 'AirUser Live, with its carefully curated seminar programme will bring together experts in the field, companies at the forefront of product and technological developments,and a select audience of attendees to inform, educate, debate and network.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap px-2 py-6">

			<div class="flex flex-wrap">

				@foreach($exhibitors as $exhibitor)
					<div class="flex w-1/2 md:w-1/3 lg:w-1/4 p-2 font-bold uppercase">
						<a href="{{ $page->resourcePath($exhibitor->getPath()) }}" class="w-full p-3 md:p-4 text-gray-800 bg-gray-300 rounded hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
							
							@if ($exhibitor->logo)
					            <div class="bg-white rounded-sm object-cover object-center overflow-hidden">
					            	<picture>
				                        <source srcset="{{ $page->resourcePath('/assets/img/exhibitors/'. $exhibitor->logo) }}-thumb.webp" type="image/webp">
				                        <source srcset="{{ $page->resourcePath('/assets/img/exhibitors/'. $exhibitor->logo) }}-thumb.png" type="image/png"> 
				                        <img src="{{ $page->resourcePath('/assets/img/exhibitors/'. $exhibitor->logo) }}-thumb.png" alt="{{ $page->name }}" class="mx-auto">
				                    </picture>

					            	{{-- <img src="{{ $page->resourcePath($exhibitor->logo_thumb) }}" alt="{{ $exhibitor->name }}" class="mx-auto"> --}}
					            </div>
				            @endif

							<div class="text-sm sm:text-md mt-3">{{ $exhibitor->name }}</div>
							<div class="text-sm">Stand : {{ $exhibitor->stand_number }}</div>
						</a>
					</div>
				@endforeach

			</div>
				
	    </div>		
	</div>
	
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-exhibit')

@endsection