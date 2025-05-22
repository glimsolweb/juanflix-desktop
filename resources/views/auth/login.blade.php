<x-guest-layout>
        <div class="md:w-[550px] w-full m-auto py-[20px] md:py-[100px] px-[50px]">
            <div class="flex flex-col items-center text-center">
                <h1 class="font-bold text-[2.5rem] text-jf-yellow">Sign In</h1>
                <p class="text-jf-white2 mb-[50px]">Log in quickly using your preferred method.</p>
            </div>

            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input id="email" class="block mt-1 w-full bg-jf-black" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email Address" />
                </div>

                <div class="mt-4">
                    <x-input id="password" class="block mt-1 w-full bg-jf-black" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>

                <div class="flex items-center justify-between my-4">
                    <div class="block">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-jf-yellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                </div>

                <x-button class="ms-4">
                    {{ __('LOG IN') }}
                </x-button>
                <flux:separator class="my-[30px]" text="Or" />
                <div class="flex flex-col flex-wrap gap-y-[10px]">
                    <a href="{{ route('social.facebook.auth') }}" class="flex items-center justify-center gap-x-[10px] w-full border py-[8px] px-[20px] rounded-[5px]"><x-juanflix.facebook-svg /> Continue with Facebook</a>
                    <a href="{{ route('social.google.auth') }}" class="flex items-center justify-center gap-x-[10px] w-full border py-[8px] px-[20px] rounded-[5px]"><x-juanflix.google-svg /> Continue with Google</a>
                </div>
                <div class="flex flex-row justify-center gap-x-[10px] mt-[50px]">
                    <p>Don't have an account? </p>
                    <a href="{{ route('register') }}" class="underline text-jf-yellow">Sign up</a>
                </div>
            </form>
        </div>
</x-guest-layout>
