<x-guest-layout>
        <div class="md:w-[550px] w-full m-auto py-[20px] md:py-[100px] px-[50px]">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-[1.2rem] font-bold text-jf-white">STEP 1 OF 3</h1>
                <h1 class="font-bold text-[2.5rem] text-jf-yellow">LET'S GET STARTED!</h1>
                <p class="text-jf-white2 mb-[50px]">Sign up to get started and enjoy exclusive films.</p>
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
                    <flux:select name="gender" placeholder="Select Gender" class="!bg-jf-black !border-gray-300 hover:cursor-pointer" required>
                        <flux:select.option>Male</flux:select.option>
                        <flux:select.option>Female</flux:select.option>
                        <flux:select.option>Other</flux:select.option>
                    </flux:select>
                </div>

                <div class="mt-4">
                    <x-label for="birth_date" value="{{ __('Date of Birth') }}" class="text-jf-white3" />
                    <flux:input id="birth_date" class:input="block mt-1 w-full !bg-jf-black !border-gray-300 hover:cursor-pointer" class="" type="date" :max="now()->toDateString()" name="birth_date" :value="old('birth_date')" required autofocus />
                </div>

                <div class="mt-4">
                    <flux:select name="city" placeholder="Choose City" class="!bg-jf-black !border-gray-300 hover:cursor-pointer" required>
                        <flux:select.option>Caloocan City</flux:select.option>
                        <flux:select.option>Las Pinas City</flux:select.option>
                        <flux:select.option>Makati City</flux:select.option>
                        <flux:select.option>Malabon City</flux:select.option>
                        <flux:select.option>Mandaluyong City</flux:select.option>
                        <flux:select.option>Marikina City</flux:select.option>
                        <flux:select.option>Muntinlupa City</flux:select.option>
                        <flux:select.option>Navotas City</flux:select.option>
                        <flux:select.option>Paranaque City</flux:select.option>
                        <flux:select.option>Pasay City</flux:select.option>
                        <flux:select.option>Quezon City</flux:select.option>
                        <flux:select.option>Pasig City</flux:select.option>
                        <flux:select.option>San Juan City</flux:select.option>
                        <flux:select.option>Taguig City</flux:select.option>
                        <flux:select.option>Valenzuela City</flux:select.option>
                    </flux:select>
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
                    <a href="{{ route('social.facebook.auth') }}" class="flex items-center justify-center gap-x-[10px] w-full md:w-[calc(50%-5px)] border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.facebook-svg /> Continue with Facebook</a>
                    <a href="{{ route('social.google.auth') }}" class="flex items-center justify-center gap-x-[10px] w-full md:w-[calc(50%-5px)] border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.google-svg /> Continue with Google</a>
                    <a href="#" class="flex items-center justify-center gap-x-[10px] w-full border py-[8px] px-[20px] rounded-[5px]" type="button"><x-juanflix.apple-svg /> Continue with Apple ID</a>
                </div>
                <div class="flex flex-row justify-center gap-x-[10px] mt-[50px]">
                    <p>Already have an account? </p>
                    <a href="{{ route('login') }}" class="underline text-jf-yellow">Log in</a>
                </div>
            </form>
        </div>
</x-guest-layout>
