<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', ': The FDCP Channel') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-jf-black">
        <div class="font-sans text-gray-900 antialiased bg-body-black">
            @include('layouts.section.header', ['isAbsolute' => $isHeaderAbsolute ?? false])
            {{ $slot }}
            @include('layouts.section.footer')
        </div>
        @livewireScripts
    </body>
</html>
