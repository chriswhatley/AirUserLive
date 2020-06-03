@extends('_layouts.master', 
	['page_title' => 'Contact Us', 
	'nav_selector' => 'exhibit', 
	'meta_title' => 'Contact The Tomorrow\'s Warehouse team', 
	'meta_description' => 'For visitor enquiries, interest in being part of the seminar programme or the opportunity to present your brand & products to end-users and logistics professionals, contact the Tomorrow\'s Warehouse team.'])

@section('content')

	<div class="container mx-auto">
        <div class="py-6 md:py-10 px-5 md:px-12">

			<div class="px-2">
				<div class="flex flex-wrap -mx-2 text-white">

					<div class="w-full md:w-full lg:w-1/3 mb-4 px-2">
						<div class="bg-gray-800 h-full p-6 rounded">
							<h3 class="pb-4 text-lg md:text-xl font-bold leading-tight uppercase tracking-tight">Exhibiting &amp; Sponsorship</h3>
							<p class="leading-relaxed">For the opportunity to present your brand & products to end-users and logistics professionals who are looking to explore critical issues that are transforming their warehouse and logistics operations, please contact:</p>
							<div class="mt-4">
								<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">
									Sales Manager
									<br />
									Angela Lyus
								</h3>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Tel : </span><a href="tel:+441342836275" class="transition duration-200 ease-in-out">+44 (0)1342 836 275</a></p>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Mob : </span><a href="tel:+447818574304" class="transition duration-200 ease-in-out">+44 (0)7818 574 304</a></p>
								
								<div class="mt-6">
			                    	<a href="mailto:alyus@westernbusiness.media?Subject=Tomorrow’s Warehouse Exhibiting/Sponsorship Enquiry" class="btn btn-red">
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
						<div class="bg-gray-600 h-full p-6 rounded">
							<h3 class="pb-4 text-lg md:text-xl font-bold leading-tight uppercase tracking-tight">Seminar Programme</h3>
							<p class="leading-relaxed">If you are interested in being a part of the Tomorrow’s Warehouse seminar programme as a speaker on any of the subject areas please send in your proposals to:</p>
							<div class="mt-4">
								<h3 class="pb-4 text-md md:text-lg font-bold leading-tight uppercase tracking-tight">
									Content Director
									<br />
									Simon Duddy
								</h3>
								
								<p class="leading-relaxed"><span class="font-semibold uppercase">Tel : </span><a href="tel:+441342333711" class="transition duration-200 ease-in-out">+44 (0)1342 333711</a></p>
								<p class="leading-relaxed"><span class="font-semibold uppercase">Mob : </span><a href="tel:+447818574306" class="transition duration-200 ease-in-out">+44 (0)7818 574306</a></p>
								
								<div class="mt-6">
			                    	<a href="mailto:sduddy@westernbusiness.media?Subject=Tomorrow’s Warehouse Seminar Programme Enquiry" class="btn btn-red">
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
						<div class="bg-red-500 h-full p-6 rounded">
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
			                    	<a href="mailto:jmullender@westernbusiness.media?Subject=Tomorrow’s Warehouse Seminar Programme Enquiry" class="btn btn-gray">
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