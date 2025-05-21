@php
    $headerClass = $isAbsolute ? 'md:absolute md:left-[50%] md:-translate-x-1/2' : 'relative';
@endphp

<div class="md:container mx-auto px-[5px] md:px-[30px] {{ $headerClass }}">
    <header class="w-full flex flex-row items-center py-5">
        <x-authentication-card-logo />
        <div class="ml-auto text-jf-white">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        @if (request()->routeIs('verify-otp'))
                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">
                                    Logout
                                </a>
                            </form>
                        @else
                            <a href="{{ url('/profile-information') }}" class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">
                                Profile
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">
                            Sign In
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">
                                Sign Up
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>
</div>
