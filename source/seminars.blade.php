@extends('_layouts.master', ['page_title' => 'Seminars', 'nav_selector' => 'seminars', 'meta_title' => 'Tomorrow\'s Warehouse Seminar Programme', 'meta_description' => 'In just a single day, the Tomorrow\'s Warehouse seminar programme will cover key topics of interest, including: automation, the future of storage, robotics and the future of the forklift.'])

@section('content')
	
	<div class="container mx-auto">
    	<div class="flex flex-wrap py-6 md:py-10 px-4">

    		<h3 class="w-full text-md md:text-lg font-bold leading-tight uppercase tracking-tight text-center">EACH SEMINAR SESSION WILL LOOK AT KEY TOPICS OF INTEREST</h3>

    		<div class="container mx-auto">
				<div class="flex flex-wrap my-1 md:my-8 text-white"> 

					<div class="order-1 w-full md:w-1/2 flex flex-col p-3">
						<div class="bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row">
							<div class="bg-cover bg-left w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2" style="background-image: url({{ $page->resourcePath('/assets/img/feature-2-no-overlay-compressed.jpg') }});">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">AUTOMATION:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">The pressures of eComm are felt throughout operations, from the growth of single Picking to a huge surge in Returns.</p>
									<p class="mt-4 leading-relaxed">Automation promises to bring speed and accuracy to operations but must be specified and managed correctly to save money. Automation can lower reliance on labour and make warehouse work less of a chore, boosting staff retention.</p>
								</div>
							</div>
						</div>  
					</div>

					<div class="order-2 w-full md:w-1/2 flex flex-col p-3">
						<div class="h-full bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row">
							<div class="bg-cover bg-center w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2 lg:bg-right-bottom" style="background-image: url({{ $page->resourcePath('/assets/img/storage-1-compressed.jpg') }});">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">THE FUTURE OF STORAGE:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">It's all about optimising space as warehouse property increases in price.</p>
									<p class="mt-4 leading-relaxed">The need for slicker, more efficient operations within an existing footprint, using high bay racking systems, automated storage solutions, mezzanines, OR simply ensuring best use of indoor space through design and outdoor space with the installation of bespoke structures & canopies.</p>
								</div>
							</div>
						</div>  
					</div>

					<div class="order-3 md:order-4 w-full md:w-1/2 flex flex-col p-3">
						<div class="h-full bg-gray-800 overflow-hidden flex-col lg:flex lg:flex-row">
							<div class="bg-cover bg-bottom w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2" style="background-image: url({{ $page->resourcePath('/assets/img/robotics-1-compressed.jpg') }});">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">ROBOTICS:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">A special focus on robotics, which promise to bring automation benefits to picking and other processes with relatively low footprint and at price ranges suitable for SMEs (as well as larger companies), that can be scaled up to support growth.</p>									
								</div>
							</div>
						</div>  
					</div>

					<div class="order-4 md:order-3 w-full md:w-1/2 flex flex-col p-3">
						<div class="bg-gray-600 overflow-hidden flex-col lg:flex lg:flex-row">
							<div class="bg-cover bg-center w-full h-32 order-1 flex flex-col lg:w-1/3 lg:h-auto lg:order-2" style="background-image: url({{ $page->resourcePath('/assets/img/forklift-1-compressed.jpg') }});">
							</div>
							<div class="order-2 w-full flex flex-col p-6 lg:w-2/3 lg:order-1">
								<h3 class="text-md md:text-lg font-bold leading-tight uppercase tracking-tight">THE FUTURE OF THE FORKLIFT:</h3>
								<div class="mt-4">
									<p class="leading-relaxed">The industry workhorse is not standing still, and there is increasing demand for lift trucks that are more reliable, greener, safer, and more connected.</p>
									<p class="mt-4 leading-relaxed">In addition, lithium-based batteries promise dramatically lower downtime and more predictable and efficient operation.</p>
								</div>
							</div>
						</div>  
					</div>

					<div class="order-5 w-full flex flex-col mx-3 mt-3 p-6 bg-red-500 text-white font-semibold text-center">
						<p>Interested in being a part of the Tomorrow’s Warehouse seminar programme as a speaker?</p>
						<div class="mt-6">
			            	<a href="{{ $page->resourcePath('/contact') }}" class="btn btn-gray">
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