<head>
    <title>
        {{ $title }} | {{ config('app.name', 'Laravel') }}
    </title>
    <meta name="description" content="{{ $content }}">
    <meta name="keywords" content="{{ $tags }}">
    <link rel=”canonical” href=”{{ route('home') }}”/>
    <link rel="alternate" href="{{ route('home') }}" hreflang="en-en"/>
    <link rel="alternate" href="{{ route('home') }}" hreflang="de-de"/>
    <link rel="alternate" href="{{ route('home') }}" hreflang="fr-fr"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”robots” content=”noindex, follow”/>

    <meta property="og:url" content="{{ url()->current()  }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $content }}"/>
    <meta property="og:image"
          content="{{ $header_img ?? '' }}"/>
</head>
