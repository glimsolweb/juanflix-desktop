<div>
    <div class="container mx-auto py-[50px] px-[10px]">
        {{-- <h1>Account</h1> --}}
        <div class="flex flex-row flex-wrap gap-[50px]">
            <div class="w-full md:w-[calc(25%-25px)] {{ $sidebar }}">
                <div class="flex flex-col py-5">
                    <h2 class="font-CreatoDisplayBold text-jf-yellow text-[1.5rem]">Manage Profiles</h2>
                    <p class="text-jf-white3 mb-5">Switch, manage or add profiles.</p>
                    <div class="flex flex-col rounded-[5px] gap-[5px]">
                        <button type="button" wire:click="selectNav('profile')" class="px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px]" disabled>
                            <i class="fa-solid fa-circle-user text-[1.2rem]"></i>Primary User <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                        <button type="button" wire:click="selectNav('secondary-profile')" class="px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px]" disabled>
                            <i class="fa-solid fa-users text-[1.2rem]"></i>Secondary Profile(s) <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col py-5">
                    <h2 class="font-CreatoDisplayBold text-jf-yellow text-[1.5rem]">Continue Watching</h2>
                    <p class="text-jf-white3 mb-5">Check all your previous watched films</p>
                    <div class="flex flex-col rounded-[5px] gap-[5px]">
                        <button type="button" wire:click="selectNav('recent-history')" class="px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px]" disabled>
                            <i class="fa-brands fa-square-youtube text-[1.2rem]"></i>Recent History <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col py-5">
                    <h2 class="font-CreatoDisplayBold text-jf-yellow text-[1.5rem]">Settings</h2>
                    <p class="text-jf-white3 mb-5">Edit info, change password, or cancel anytime.</p>
                    <div class="flex flex-col rounded-[5px] gap-[5px]">
                        <button type="button" wire:click="selectNav('account-information')" class="{{ $selectedTab === 'account-information' ? 'bg-jf-yellow active' : '' }} px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px] group">
                            <i class="fa-solid fa-circle-user text-[1.2rem]"></i><span class="group-hover:underline">Account Information</span> <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                        <button type="button" wire:click="selectNav('security-privacy')" class="{{ $selectedTab === 'security-privacy' ? 'bg-jf-yellow active' : '' }} px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px] group">
                            <i class="fa-solid fa-lock text-[1.2rem]"></i> <span class="group-hover:underline">Security and Privacy</span> <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                        <button type="button" wire:click="selectNav('app-settings')" class="{{ $selectedTab === 'app-settings' ? 'bg-jf-yellow active' : '' }} px-[20px] py-[10px] rounded-[5px] bg-jf-gray2 flex flex-row items-center gap-x-[10px] group">
                            <i class="fa-solid fa-gear text-[1.2rem]"></i><span class="group-hover:underline">App Settings</span> <i class="fa-solid fa-chevron-right ml-auto"></i>
                        </button>
                    </div>
                </div>
                <div class="flex mx-auto text-jf-black md:gap-x-[20px] flex-wrap flex-col md:flex-row gap-[10px] w-full">
                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}" class="w-full" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="bg-jf-yellow text-jf-black font-bold py-[10px] px-[50px] rounded-[5px] w-full block text-center">
                            SIGN OUT
                        </a>
                    </form>
                </div>
                {{-- <p>{{ $selectedTab }}</p> --}}
            </div>
            <div class="w-full md:w-[calc(75%-25px)] flex-col gap-[20px] {{ $panel }}">
                <button type="button" class="md:hidden block w-max" wire:click='backToMenu()'>
                    <i class="fa-solid fa-arrow-left text-[2rem] hover:text-jf-yellow"></i>
                </button>
                @switch($selectedTab)
                    @case('account-information')
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')
                        @endif
                        <hr>
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>
                        @endif
                        <hr>
                        {{-- My Plan --}}
                        @livewire('landing.profile-information.account-information.profile-plan')
                        @break
                    @case('security-privacy')
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>
                        @endif
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                        @break
                    @case('app-settings')
                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
                        @break
                    @default
                        {{-- Default Panel to show --}}
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')
                        @endif
                        <hr>
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>
                        @endif
                        <hr>
                        {{-- My Plan --}}
                        @livewire('landing.profile-information.account-information.profile-plan')
                        @break
                @endswitch
            </div>
        </div>
    </div>
</div>
