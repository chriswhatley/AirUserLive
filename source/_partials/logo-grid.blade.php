<div class="container mx-auto">
	<div class="flex flex-wrap px-2 py-6">

		<div class="flex flex-wrap">

			@foreach($exhibitors as $exhibitor)
				<div class="flex w-1/2 md:w-1/3 lg:w-1/4 p-2 font-bold uppercase">

					@if($active_links)
						<a href="{{ $exhibitor->getPath() }}" class="w-full p-3 md:p-4 text-gray-800 bg-gray-300 rounded hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
					@else							
						<div class="w-full p-3 md:p-4 text-gray-800 bg-gray-300 rounded hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
					@endif
						
						@if ($exhibitor->logo)
				            <div class="bg-white rounded-sm object-cover object-center overflow-hidden">
				            	<picture>
			                        <source srcset="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.webp" type="image/webp">
			                        <source srcset="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.png" type="image/png"> 
			                        <img src="{{ '/assets/img/exhibitors/'. $exhibitor->logo }}-thumb.png" alt="{{ $page->name }}" class="mx-auto">
			                    </picture>
				            </div>
			            @endif

			            @if($display_name)
							<div class="text-sm sm:text-md mt-3">{{ $exhibitor->name }}</div>
						@endif

						@if($display_status && $exhibitor->partner_status)
							<div class="text-sm font-normal">{{ $exhibitor->partner_status }}</div>
						@endif

					@if($active_links)
						</a>
					@else
						</div>
					@endif

				</div>
			@endforeach

		</div>
			
    </div>		
</div>