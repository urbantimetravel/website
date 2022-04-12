<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class='overflow-x-hidden relative'>
    <header class='bg-dark-900'>
    @include('_layouts.navigation')
    </header>

    <!-- Page content -->
    <main class='bg-dark-900'>
        @yield('body')
    </main>

    @include('_layouts.footer')

    </body>
</html>
