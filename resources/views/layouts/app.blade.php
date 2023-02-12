<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
		<link rel="manifest" href="assets/img/site.webmanifest">

        <!-- CSS Files -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Styles -->
        @wireUiScripts
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles



    </head>

    <body
    x-data="{scrolledFromTop: false}"
    x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false;"
    x-cloak
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    class="min-h-screen font-sans antialiased bg-fixed bg-slate-400 dark:bg-slate-800" style="background-image: url(../assets/img/fwbg.svg)">

    {!! RecaptchaV3::initJs() !!}
    <x-nav/>
    <!-- Page Heading -->
    <header>
        <nav class="w-full bg-gradient-to-r from-[#8e94a4] dark:from-[#747C90] to-[#747C90] dark:to-[#444955] mx-auto top-0 static h-auto pt-24 pb-6" >
        </nav>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <x-footer/>
    {{-- @stack('modals') --}}

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <script>
        AOS.init();
        </script>
        <x-livewire-alert::scripts />
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-636154def166efff"></script>

    </body>
</html>
