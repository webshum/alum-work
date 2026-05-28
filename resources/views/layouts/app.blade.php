<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
        <meta name="description" content="@yield('description', '')">

        <!-- OG -->
        <meta property="og:title" content="@yield('title', config('app.name'))">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:image" content="@yield('og_image', '')">
        <meta property="og:description" content="@yield('description', '')">
        <meta property="og:site_name" content="{{ config('app.name') }}">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', config('app.name'))">
        <meta name="twitter:description" content="@yield('description', '')">
        <meta name="twitter:image" content="@yield('og_image', '')">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32"  href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

    <body class="@yield('body-class')">
        <div class="overflow-hidden">
            @include('layouts.header')

            <main class="main">
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
    </body>
</html>
