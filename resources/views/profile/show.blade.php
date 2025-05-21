<x-app-layout>
    <div class="flex flex-col mx-[10px]">
        <h1>Account</h1>
        <div class="w-3/12">
            <div class="flex flex-col my-5">
                <h2 class="font-CreatoDisplayBold text-jf-yellow text-[1.5rem]">Manage Profiles</h2>
                <p class="text-jf-white3 mb-5">Switch, manage or add profiles.</p>
                <div class="flex flex-col bg-jf-gray2 px-[15px] py-[20px] rounded-[5px] gap-[20px]">
                    <button type="button" class="flex flex-row items-center gap-x-[10px]">
                        <i class="fa-solid fa-circle-user text-[1.2rem]"></i>Primary User <i class="fa-solid fa-chevron-right ml-auto"></i>
                    </button>
                    <button type="button" class="flex flex-row items-center gap-x-[10px]">
                        <i class="fa-solid fa-users text-[1.2rem]"></i>Secondary Profile(s) <i class="fa-solid fa-chevron-right ml-auto"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div> --}}
</x-app-layout>
