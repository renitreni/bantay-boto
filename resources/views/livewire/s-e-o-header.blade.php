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
</head>
