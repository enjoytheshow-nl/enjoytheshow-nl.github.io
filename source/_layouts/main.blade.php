<!doctype html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-white bg-gradient-to-r from-ets-blue to-ets-green">
    <div class="container mx-auto pt-12 flex flex-col min-h-screen justify-between">
        @include('_partials.header')

        <main class="mt-12 flex-grow px-8 md:px-0 text-center md:text-left">
            @yield('body')
        </main>

        @include('_partials.footer')
    </div>
</body>

</html>
