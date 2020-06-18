@extends('_layouts.master', 
	['page_title' => 'Contact Us', 
	'nav_selector' => 'exhibit', 
	'meta_title' => 'Contact The Tomorrow\'s Warehouse team', 
	'meta_description' => 'For the opportunity to present your brand & products to end-users professionals who are looking to explore the key issues around Air-powered systems, contact the Air User Live team.'])

@section('content')

	<div class="container mx-auto">
        <div class="py-6 md:py-10 px-5 md:px-12">

			<div class="px-2">
				<div class="flex flex-wrap -mx-2 text-white">

					<div class="w-full md:w-full lg:w-1/3 mb-4 px-2">
						<div class="bg-gray-800 h-full p-6 rounded">
							<h3 class="pb-4 text-lg md:text-xl font-bold leading-tight uppercase tracking-tight">Exhibiting &amp; Sponsorship</h3>
							<p class="leading-relaxed">For the opportunity to present your brand & products to end-user professionals who are looking to explore the key issues around Air-powered systems, please contact:</p>
							<div class="mt-4">
								<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">
									Sales Manager
									<br />
									Rachel Godfrey
								</h3>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Tel : </span><a href="tel:+441342333714" class="transition duration-200 ease-in-out">+44 (0)1342 333714</a></p>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Mob : </span><a href="tel:+447881029806" class="transition duration-200 ease-in-out">+44 (0)7881 029806</a></p>
								
								<div class="mt-6">
			                    	<a href="mailto:rgodfrey@westernbusiness.media?Subject=Air User Live Exhibiting/Sponsorship Enquiry" class="btn btn-blue">
			                            <div>Contact</div>
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

					<div class="w-full md:w-1/2 lg:w-1/3 mb-4 px-2">
						<div class="bg-blue-500 h-full p-6 rounded">
							<h3 class="pb-4 text-lg md:text-xl font-bold leading-tight uppercase tracking-tight">Seminar Programme</h3>
							<p class="leading-relaxed">If you are interested in being a part of the Air User Live seminar programme as a speaker on any of the subject areas please send in your proposals to:</p>
							<div class="mt-4">
								<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">
									Content Director
									<br />
									Charlotte Stonestreet
								</h3>															
								
								<div class="mt-6">
			                    	<a href="mailto:cstonestreet@westernbusiness.media?Subject=Air User Live Seminar Programme Enquiry" class="btn btn-gray">
			                            <div>Contact</div>
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

					<div class="w-full md:w-1/2 lg:w-1/3 mb-4 px-2">
						<div class="bg-gray-800 h-full p-6 rounded">
							<h3 class="pb-4 text-lg md:text-xl font-bold leading-tight uppercase tracking-tight">Visiting &amp; Registration</h3>
							<p class="leading-relaxed">For all visitor and registration-based enquiries, please contact:</p>
							<div class="mt-4">
								<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">
									Audience Manager
									<br />
									James Mullender
								</h3>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Tel : </span><a href="tel:+441342333744" class="transition duration-200 ease-in-out">+44 (0)1342 333744</a></p>

								<div class="mt-6">
			                    	<a href="mailto:jmullender@westernbusiness.media?Subject=Air User Live Registration Enquiry" class="btn btn-blue">
			                            <div>Contact</div>
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

		</div>
	</div>

	@include('_partials/map')
	
@endsection