<div>
    <div class="md:container max-w-sm mx-auto">
        <div class="flex py-5 items-center">
            {{ $logo }}
            @if (request()->routeIs('login'))
                <a href="{{ route('register') }}"
                class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">Sign Up</a>
            @elseif (request()->routeIs('register'))
                <a href="{{ route('login') }}"
                class="text-jf-black ml-auto bg-jf-yellow p-[5px_20px] rounded-[5px] font-bold">Sign In</a>
            @endif
        </div>
        {{ $slot }}
    </div>
</div>
