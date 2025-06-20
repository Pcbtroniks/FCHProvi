<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicons/favicon.svg" />
        <link rel="shortcut icon" href="/favicons/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png" />
        <link rel="manifest" href="/favicons/site.webmanifest" />

        @include('front.shared.meta')

        <title>{{ config('app.name', 'Hotel FCH Minerva') }}</title>

        @vite('resources/css/app.css')
        @yield('css')
    </head>
    <body class="antialiased">

        @include('front.shared.sidebar')

        @include('front.shared.header')

        @yield('content')

        @include('front.shared.footer')

        @vite('resources/js/app.js')
        @yield('js')
    </body>
</html>
