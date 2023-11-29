<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benver Huislift</title>

    <!-- Meta SEO -->
    <meta name="title" content="Landwind - Tailwind CSS Landing Page">
    <meta name="description" content="Benber Huis Lift. We help you move efficiently">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="dutch">

    <meta name="author" content="TommyGun">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/splide.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    @vite('resources/css/app.css')
</head>
<style>

</style>

<body>
    @include('partials.admin.header')
    <div style="display:block; height: 88px"></div>
    <main class="max-w-screen-xl mx-auto">
        @yield('content')
    </main>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="/js/splide.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
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
            gap: '1.5em',
            heightRatio: 0.2,
            cover: true,
            classes: {
                arrows: 'splide__arrows your-class-arrows bg-slate-100',
                arrow: 'splide__arrow your-class-arrow bg-slate-100',
            },
        }).mount();
    }
</script>
@yield('script')

</html>
