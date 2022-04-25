<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:title" content="Urban Timetravel">
    <meta property="og:type" content="website">
    <meta property="og:url" href="{{ $page->getUrl() }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="{{ $page->baseUrl }}/assets/images/favicon.ico">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="relative overflow-x-hidden">
    <header class="bg-dark-900">
        @include('_layouts.navigation')
    </header>

    <!-- Page content -->
    <main class="bg-dark-900">
        @yield('body')
    </main>

    @include('_layouts.footer')
</body>

</html>