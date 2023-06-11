<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="csp-nonce" content="{{ csp_nonce() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @googlefonts(['nonce' => csp_nonce()])

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        @include('googletagmanager::head')
    </head>
    <body class="font-sans antialiased">
        @include('googletagmanager::body')

        <x-banner />

        <div class="min-h-screen bg-gray-100">
            {{ $slot }}
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
