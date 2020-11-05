@extends('_layouts.master', ['page_title' => 'Seminars', 'nav_selector' => 'seminars', 'meta_title' => 'Tomorrow\'s Warehouse Seminar Programme', 'meta_description' => 'In just a single day, the Tomorrow\'s Warehouse seminar programme will cover key topics of interest, including: automation, the future of storage, robotics and the future of the forklift.'])

@section('content')

    <div class="container mx-auto px-6">

        <div class="flex flex-wrap px-4 pt-10">
            <h3 class="w-full font-bold leading-tight uppercase tracking-tight text-center text-2xl">The full 2020 agenda</h3>
        </div>

        <div class="pt-10 pb-4 md:pb-10">

            <div class="grid grid-cols-1 md:grid-cols-12 md:row-gap-6">

                @foreach($seminars as $seminar)

                    <div class="col-span-2 {{ $seminar->class == 'intermission' ? 'bg-teal-500' : 'bg-blue-500' }} rounded-t-lg md:rounded-t-none md:rounded-l-lg px-4 flex justify-center items-center text-center h-12 md:h-auto text-xl text-white font-bold tracking-tighter leading-snug uppercase">
                        {{ $seminar->time_slot }}
                    </div>
                    <div class="col-span-10 rounded-b-lg md:rounded-b-none md:rounded-r-lg {{ $seminar->class == 'intermission' ? 'bg-teal-200' : 'bg-gray-200' }} pt-4 pb-1 px-6 mb-6 md:mb-0">
                        <h4 class="font-bold text-xl text-gray-800 tracking-tight">{{ $seminar->title }}</h4>

                        @if($seminar->presented_by)
                            <div class="mt-2 text-sm font-bold text-blue-500 uppercase">{{ $seminar->presented_by }}</div>
                        @endif

                        <div class="mt-2">
                            {!! $seminar->getContent() !!}
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
        	
    	
    </div>      
    
    
    @include('_partials/parallax-exhibit')
    @include('_partials/feature-visit')


    
    @endsection