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
        <section class="main-section h-dvh flex items-center bg-hero">
            <div class="text-center mx-auto">
                <h1 class="text-[3.5rem] leading-[normal] mb-[1rem] font-CreatoDisplayExtraBold">Stream The Best Picks,<br>
                    Personalized For You
                </h1>
                <p class="text-jf-yellow mb-[2rem] text-[1.2rem] font-CreatoDisplayMedium">START YOUR JOURNEY TODAY!</p>
                <p>Worthwhile Watching, Just for You!</p>
                <p>Enter your email to start or continue yor JUANFLIX membership!</p>

                <div class="flex mt-[30px] gap-x-[10px] font-CreatoDisplayBold">
                    <div class="relative flex w-full items-center gap-1">
                        <input type="text" class="peer p-[22px_15px_10px_15px] rounded-[5px] z-10 w-full bg-jf-gray-transparent outline-none" placeholder="" />
                        <span class="absolute left-4 select-none font-semibold text-jf-white transition-all peer-[:focus]:left-4 peer-[:not(:placeholder-shown)]:left-4 peer-[:focus]:-translate-y-4 peer-[:focus]:text-xs peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-4">Email Address</span>
                    </div>
                    <button class="transparent-btn flex border justify-center w-[250px] gap-x-[10px] text-jf-yellow items-center" type="submit">Get Started <i class="text-jf-yellow fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </section>
    </body>
</html>
