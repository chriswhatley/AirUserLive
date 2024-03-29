<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    // 'baseUrl' => 'http://192.168.8.110:3000',
    'siteName' => "Air User Live",
    'siteDescription' => "Brought to you by the team behind IPE and publishers of the highly regarded annual AirUser Guide, AirUser Live is a FREE-TO-ATTEND one day conference aimed at end user air power professionals.",
    'registrationURL' => 'https://form.jotform.com/211403609508046',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'resourcePath' => function ($page, $resourcePath){
    	return trim($page->baseUrl, '/') . $resourcePath;
    },
    'collections' => [
        'exhibitors' => [
            'exhibitor' => 'Exhibitor Name', // Default exhibitor name, if not provided in an exhibitor profile
            'sort' => 'sort_order',
            'path' => 'exhibitors/{filename}',
        ],
        'seminars' => [
            'title' => 'Session Title',
            'speaker',
            'organisation',
            'time_slot' => 'Session Time Slot',
            'sort' => 'time_slot',
        ],
    ],
];
