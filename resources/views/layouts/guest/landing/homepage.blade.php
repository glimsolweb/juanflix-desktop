<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}: The FDCP Channel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-jf-black">
        <div class="md:container max-w-sm mx-auto px-[30px] md:absolute md:left-[50%] md:-translate-x-1/2">
            <header class="w-full flex flex-row items-center py-5">
                <x-authentication-card-logo />
                <div class="ml-auto text-jf-white">
                    @if (Route::has('login'))
                        <nav class="flex items-center justify-end gap-4">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="text-jf-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="text-jf-white"
                                >
                                    Sign In
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="text-jf-white">
                                        Sign Up
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </header>
        </div>

    </body>
</html>
