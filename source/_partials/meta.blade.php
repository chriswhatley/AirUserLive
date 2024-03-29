		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{{ isSet($page_title) ?  $page_title . ' | ' : '' }}{{ $page->siteName }}</title>
		<meta name="description" content="{{ $meta_description }}">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700;800;900&display=swap" rel="stylesheet" rel="preload">
		<link rel="stylesheet" href="{{ mix('css/main.css') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/meta/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/meta/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/meta/favicon-16x16.png">
		<link rel="mask-icon" href="/assets/img/meta/safari-pinned-tab.svg" color="#d2232a">
		<link rel="manifest" href="/manifest.json">
		<meta name="theme-color" content="#ffffff">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@IPEmagazine">
		<meta name="twitter:title" content="{{ $meta_title }}">
		<meta name="twitter:description" content="{{ $meta_description }}">
		<meta name="twitter:image" content="/assets/img/meta/twitter-card-large.png">
		<meta name="twitter:creator" content="@IPEmagazine">
		<meta property="og:url" content="{{ trim($page->baseUrl, '/') }}" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{ $meta_title }}" />
		<meta property="og:description" content="{{ $meta_description }}" />
		<meta property="og:image" content="/assets/img/meta/twitter-card-large.png" />