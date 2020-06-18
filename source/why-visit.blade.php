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
    			<p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus excepturi iste quo cum soluta! Qui doloribus modi deserunt velit, aliquam id voluptatem quo dicta optio sit. Modi ipsa ipsum illum.</p>
				
				<div class="bg-gray-800 mt-4 p-6  font-semibold text-md uppercase text-center text-white rounded">
					<span class="block text-2xl">Save the date</span>
					<span class="block mt-3 text-md">10th June, 2021 at the Ricoh Arena - Coventry</span>
				</div>
				
				<p class="mt-4 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, labore ea quam iusto ab, enim soluta velit distinctio eos iure vero culpa. Minus, obcaecati, nam aspernatur velit alias distinctio at.</p>
				<p class="mt-4 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ad laborum cupiditate dolorum enim, cumque nobis repellendus error.</p>
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