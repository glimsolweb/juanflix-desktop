<x-guest-layout>
    <div class="md:w-[550px] w-full m-auto py-[20px] md:py-[100px] px-[50px]">
        <div class="flex flex-col items-center text-center">
            <h1 class="font-bold text-[2.5rem] text-jf-yellow">RESET PASSWORD</h1>
            <p class="text-jf-white2 mb-[50px]">Almost done, enter your new password<br> and you're all set to go!</p>
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" class="text-jf-white3" />
                <x-input id="email" class="block mt-1 w-full bg-jf-gray3" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-jf-white3" />
                <x-input id="password" class="block mt-1 w-full bg-jf-gray3" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-jf-white3" />
                <x-input id="password_confirmation" class="block mt-1 w-full bg-jf-gray3" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('CONFIRM') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>
