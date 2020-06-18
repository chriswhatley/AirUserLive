@extends('_layouts.master', ['page_title' => 'Seminars', 'nav_selector' => 'seminars', 'meta_title' => 'Tomorrow\'s Warehouse Seminar Programme', 'meta_description' => 'In just a single day, the Tomorrow\'s Warehouse seminar programme will cover key topics of interest, including: automation, the future of storage, robotics and the future of the forklift.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-4">

    		<h3 class="w-full text-md md:text-lg font-bold leading-tight uppercase tracking-tight text-center">EACH SEMINAR SESSION WILL LOOK AT KEY TOPICS OF INTEREST</h3>

    		<div class="container mx-auto">
				<div class="flex flex-wrap my-1 md:my-8 text-white"> 

					<div class="order-1 w-full md:w-1/2 flex flex-col p-3">
						<div class="bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row rounded">
							<div class="bg-cover bg-left w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2 seminar-legal">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">LEGAL OBLIGATIONS:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">While The Pressure Systems Safety Regulations (PSSR) have been around for 20 years, there is still a lack of awareness.</p>
									<p class="leading-relaxed">Any company that uses or owns compressed air or gas systems comes under the criteria of the regulations; for the majority this means having the pressure system regularly inspected and certified by a competent person, as well as documenting all repairs and modifications.</p>								
								</div>
							</div>
						</div>  
					</div>

					<div class="order-2 w-full md:w-1/2 flex flex-col p-3">
						<div class="h-full bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row rounded">
							<div class="bg-cover bg-center w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-3 lg:bg-right-bottom seminar-efficiency">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-2">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">ENERGY EFFICIENCY:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">With concerns over the global climate crisis rising, the topic of energy has never been more important.</p>
									<p class="leading-relaxed">Compressed air has traditionally been seen as a cheap form of power, which has meant that in some cases waste has not been properly dealt with. Appropriate pressure adjustment, leak testing &amp; fixing, a clear usage policy &amp; efficient delivery are all important considerations.</p>								
								</div>
							</div>
						</div>  
					</div>

					<div class="order-3 md:order-4 w-full md:w-1/2 flex flex-col p-3">
						<div class="h-full bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row rounded">
							<div class="bg-cover bg-bottom w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-4 seminar-health">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-3">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">HEALTH &amp; SAFETY:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">Using compressed air brings a wide range of health and safety issues to be aware of. </p>
									<p class="leading-relaxed">Orificial bodily entry, skin penetration, explosions and optical damage caused by particles are all dangers of air compression use. Over-pressurisation and associated risks, such as blockages, failure of automatic controls, malfunctions such as overspeeding, external fires nearby, overheating and deposit accumulation can all occur.</p>									
								</div>
							</div>
						</div>  
					</div>

					<div class="order-4 md:order-3 w-full md:w-1/2 flex flex-col p-3">
						<div class="bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row rounded">
							<div class="bg-cover bg-center w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2 seminar-training">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">TRAINING & APPRENTICESHIPS:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">The compressed air sector is not immune to the shortage of skilled engineers and workers currently facing UK industry. This means that training and apprenticeships should take top priority.</p>
									<p class="leading-relaxed">The scope of the work undertaken is wide ranging and varied, often playing a vital role in the safety of an operation, as well as ensuring systems operate as efficiently as possible.</p>									
								</div>
							</div>
						</div>  
					</div>

					<div class="order-5 w-full flex flex-col mx-3 mt-3 p-6 bg-gray-800 text-white font-semibold text-center">
						<p>Interested in being a part of the Air User Live seminar programme as a speaker?</p>
						<div class="mt-6">
			            	<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-blue">
			                    <div>Get in touch</div>
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
		</div>		
	</div>
	
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-visit')


	
@endsection