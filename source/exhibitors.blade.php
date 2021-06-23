@extends('_layouts.master', ['page_title' => 'Our Exhibitors', 'nav_selector' => 'visit', 'meta_title' => 'AirUSer Live Exhibitors', 'meta_description' => 'AirUser Live, with its carefully curated seminar programme will bring together experts in the field, companies at the forefront of product and technological developments,and a select audience of attendees to inform, educate, debate and network.'])

@section('content')
	
	@include('_partials/logo-grid', ['active_links' => true, 'display_name' => true, 'display_status' => true])
	@include('_partials/parallax-exhibit')
	@include('_partials/feature-exhibit')

@endsection