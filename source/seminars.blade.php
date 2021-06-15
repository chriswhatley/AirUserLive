@extends('_layouts.master', ['page_title' => 'Seminars', 'nav_selector' => 'seminars', 'meta_title' => 'Tomorrow\'s Warehouse Seminar Programme', 'meta_description' => 'In just a single day, the Tomorrow\'s Warehouse seminar programme will cover key topics of interest, including: automation, the future of storage, robotics and the future of the forklift.'])

@section('content')

    <div class="container mx-auto px-6">

        <div class="flex flex-wrap px-4 pt-10 text-center">
            <h3 class="w-full font-bold leading-tight uppercase tracking-tight text-2xl">The full 2021 agenda</h3>
            <p class="mx-auto mt-4">Times & sessions are preliminary and subject to change.</p>
        </div>

        <div class="pt-4 pb-4 md:pb-10">

            <div class="grid grid-cols-1 md:row-gap-6 md:grid-cols-12 seminar">

                @foreach($seminars as $seminar)
                    
                        <div class="col-span-2 {{ $seminar->class == 'intermission' ? 'bg-teal-500' : 'bg-blue-500' }} rounded-t-lg md:rounded-t-none md:rounded-l-lg px-4 py-2 flex justify-center items-center text-xl text-white font-bold tracking-tighter leading-snug uppercase">
                            {{ $seminar->time_slot }}
                        </div>

                        <div class="mb-6 md:mb-0 flex flex-wrap items-center col-span-10 rounded-b-lg md:rounded-b-none md:rounded-r-lg {{ $seminar->class == 'intermission' ? 'bg-teal-200' : 'bg-gray-200' }} px-6 py-4">
                            <h4 class="w-full font-bold text-xl text-gray-800 tracking-tight uppercase">{{ $seminar->title }}</h4>

                            @if($seminar->presented_by)
                                <div class="w-full mt-2 text-sm font-bold text-blue-500">{!! $seminar->presented_by !!}</div>
                            @endif

                            @if(strlen($seminar->getContent()) > 0)
                                <div class="w-full mt-2"> 
                                    {!! $seminar->getContent() !!}
                                </div>
                            @endif
                        </div>

                @endforeach

            </div>

        </div>
        	
    	
    </div>      
    
    
    @include('_partials/parallax-exhibit')
    @include('_partials/feature-visit')


    
    @endsection