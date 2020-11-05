@extends('_layouts.master', ["page_title" => "Our sponsors", "nav_selector" => "exhibit", 'meta_title' => 'Sponsors of Air User Live', 'meta_description' => 'Don\'t miss this opportunity to present your brand & products to end-users professionals who are looking to explore the key issues around Air-powered systems.'])

@section('content')
	
	<div class="container mx-auto px-6 py-12">

        @foreach($sponsors as $sponsor)

            <div class="sponsor w-full flex flex-wrap bg-gray-200 p-8 rounded-lg mb-6">          
                <div class="order-2 md:order-1 w-full md:w-4/6">
                    <h3 class="text-xl md:text-2xl font-bold leading-tight uppercase tracking-tight text-center md:text-left">{{ $sponsor->name }}</h3>
                    <div class="text-blue-500 font-bold mb-4 uppercase text-center md:text-left">{{ $sponsor->sponsorship}}</div>
                    {!! $sponsor->getContent() !!}
                    <div class="w-full text-center md:text-left">
                        <a href="{{ $sponsor->website_url }}" class="btn btn-blue mt-4" target="_blank" rel="noopener">
                        <div>Visit website</div>
                        <div>
                            <svg class="fill-current text-white inline-block h-6 w-4">
                                <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/>
                            </svg>
                        </div>
                    </a> 
                    </div>
                             
                </div>

                <div class="{{ $sponsor->class ? $sponsor->class : '' }} order-1 md:order-2 flex justify-center items-center w-full md:w-2/6">
                    <picture>
                        <source srcset="/assets/img/sponsors/sponsor-{{ $sponsor->logo }}.webp" type="image/webp">
                        <source srcset="/assets/img/sponsors/sponsor-{{ $sponsor->logo }}.png" type="image/png"> 
                        <img src="/assets/img/sponsors/sponsor-{{ $sponsor->logo }}.png" alt="{{ $sponsor->name }}">
                    </picture>
                </div>    
            </div>

        @endforeach

	</div>

@endsection