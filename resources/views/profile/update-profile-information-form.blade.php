<x-form-section submit="updateProfileInformation">
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-slot name="title">
                {{ __('Profile Information') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Edit info, change password, or cancel anytime.') }}
            </x-slot>
        </div>
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden"
                            wire:model.live="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full size-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full size-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="flex flex-wrap gap-[10px]">
            <!-- Name -->
            <div class="w-full md:w-[calc(33%-5px)]">
                <x-label for="name" value="{{ __('Name') }}" class="text-jf-white3" />
                <x-input id="name" type="text" class="mt-1 block w-full bg-jf-gray3" wire:model="state.name" required autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="w-full md:w-[calc(33%-5px)]">
                <x-label for="email" value="{{ __('Email Address') }}" class="text-jf-white3" />
                <x-input id="email" type="email" class="mt-1 block w-full bg-jf-gray3" wire:model="state.email" required autocomplete="username" />
                <x-input-error for="email" class="mt-2" />

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                    <p class="text-sm mt-2">
                        {{ __('Your email address is unverified.') }}

                        <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if ($this->verificationLinkSent)
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                @endif
            </div>

            <!-- Gender -->
            <div class="w-full md:w-[calc(33%-5px)]">
                <x-label for="gender" value="{{ __('Gender') }}" class="text-jf-white3" />
                <flux:select id="gender" name="gender" wire:model="state.gender" placeholder="Select Gender..." class="!bg-jf-gray3 !border-gray-300 hover:cursor-pointer mt-1 rounded-md" required>
                    <flux:select.option>Male</flux:select.option>
                    <flux:select.option>Female</flux:select.option>
                    <flux:select.option>Other</flux:select.option>
                </flux:select>
                <x-input-error for="gender" class="mt-2" />
            </div>

            <!-- Date of Birth -->
            <div class="w-full md:w-[calc(33%-5px)]">
                <x-label for="birth_date" value="{{ __('Date of Birth') }}" class="text-jf-white3" />
                <x-input id="birth_date" type="date" class="mt-1 block w-full bg-jf-gray3" wire:model="state.birth_date" required autocomplete="birth_date" />
                <x-input-error for="birth_date" class="mt-2" />
            </div>

            <!-- City -->
            <div class="w-full md:w-[calc(33%-5px)]">
                <x-label for="city" value="{{ __('City') }}" class="text-jf-white3" />
                <flux:select id="city" name="city" wire:model="state.city" placeholder="Choose City..." class="!bg-jf-gray3 !border-gray-300 hover:cursor-pointer mt-1 rounded-md" required>
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
                <x-input-error for="city" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <div class="w-full md:w-[250px]">
            <x-action-message class="me-3 mb-4 font-medium text-sm text-green-600" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-button>
        </div>
    </x-slot>
</x-form-section>
