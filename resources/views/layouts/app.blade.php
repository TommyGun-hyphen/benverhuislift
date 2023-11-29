<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="Benverhuislift - We help you move">
    <meta name="description" content="Benberhuislift. We help you move efficiently">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="nl">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('partials.header')
        <div style="display:block; height: 72px"></div>
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
    <script src="/js/splide.min.js"></script>
    <script>
        var elms = document.getElementsByClassName('splide');

        for (var i = 0; i < elms.length; i++) {
            new Splide(elms[i], {
                type: 'loop',
                perPage: 3,
                breakpoints: {
                    1024: {
                        perPage: 2,
                        heightRatio: .5,
                    },
                    640: {
                        perPage: 1,
                        heightRatio: 1,
                    },
                },
                heightRatio: 0.2,
                cover: true,
                classes: {
                    arrows: 'splide__arrows your-class-arrows bg-slate-100',
                    arrow: 'splide__arrow your-class-arrow bg-slate-100',
                },
                gap: '1em'
            }).mount();
        }
    </script>
</body>

</html>
