<x-guest-layout>
    <div class="md:w-[550px] w-full m-auto py-[20px] md:py-[100px] px-[50px]">
        <div class="flex flex-col items-center text-center">
            <h1 class="font-bold text-[2.5rem] text-jf-yellow">FORGOT PASSWORD</h1>
            <p class="text-jf-white2 mb-[50px]">Enter your email address and we will send you<br> link to reset your password</p>
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email Address*') }}" class="text-jf-white3" />
                <x-input id="email" class="block mt-1 w-full bg-jf-gray3" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('RESET PASSWORD') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>
