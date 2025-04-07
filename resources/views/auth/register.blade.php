<x-guest-layout>
    <x-juanflix.header>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="md:w-[550px] w-full m-auto my-[20px] md:my-[50px]">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-[2.5rem] text-jf-yellow">LET'S GET STARTED!</h1>
                <p class="text-jf-white2 mb-[50px]">Sign up to get started and enjoy exclusive features.</p>
            </div>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-input id="name" class="block mt-1 w-full bg-jf-black" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full Name" />
                </div>

                <div class="mt-4">
                    <x-input id="email" class="block mt-1 w-full bg-jf-black" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email Address" />
                </div>

                <div class="mt-4">
                    <x-input id="password" class="block mt-1 w-full bg-jf-black" type="password" name="password" required autocomplete="new-password" placeholder="Enter Your Password" />
                </div>

                <div class="mt-4">
                    <x-input id="password_confirmation" class="block mt-1 w-full bg-jf-black" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-jf-yellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-jf-yellow rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ms-4">
                        {{ __('SIGN UP NOW') }}
                    </x-button>
                </div>

                <flux:separator class="my-[30px]" text="Or" />
                <div class="flex flex-row flex-wrap gap-[10px]">
                    <button class="flex items-center justify-center gap-x-[10px] w-full md:w-[calc(50%-5px)] border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.facebook-svg /> Continue with Facebook</button>
                    <button class="flex items-center justify-center gap-x-[10px] w-full md:w-[calc(50%-5px)] border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.google-svg /> Continue with Google</button>
                    <button class="flex items-center justify-center gap-x-[10px] w-full border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.google-svg /> Continue with Apple ID</button>
                </div>
                <div class="flex flex-row justify-center gap-x-[10px] mt-[50px]">
                    <p>Already have an account? </p>
                    <a href="{{ route('login') }}" class="underline text-jf-yellow">Log in</a>
                </div>
            </form>
        </div>
    </x-juanflix.header>
</x-guest-layout>
