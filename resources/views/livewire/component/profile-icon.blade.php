<div>
    <div class="my-[50px] relative">
        <img src="{{ asset($selectedIconImg ?? 'images/icon-yellow.jpg') }}" class="w-[130px] md:w-[150px] h-[130px] md:h-[150px] rounded-[5px]" alt="Profiles">
        <div class="absolute -bottom-[15px] -right-[15px]">

            <flux:modal.trigger name="edit-profile">
                <button type="button" class="bg-jf-white w-[50px] h-[50px] block rounded-full relative">
                    <i class="fa-solid fa-pen text-jf-yellow absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"></i>
                </button>
            </flux:modal.trigger>

            {{-- Modal Profile Icon --}}
            <flux:modal name="edit-profile" class="md:w-95">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Select Profile Icon</flux:heading>
                        <flux:text class="mt-2">Make changes to your personal details.</flux:text>
                    </div>
                    <div class="flex flex-row flex-wrap gap-[10px] md:gap-[30px] justify-between">
                        @foreach ($available_icons as $icon)
                            <img src="{{ asset('storage/'.$icon->image) }}" class="hover:cursor-pointer hover:scale-[1.05] transition-all border-2 w-[130px] md:w-[150px] h-[130px] md:h-[150px] rounded-[5px]" alt="Profiles" wire:click="renderIcon('{{ $icon->image }}', {{ $icon->id }})">
                        @endforeach
                    </div>
                </div>
            </flux:modal>
        </div>
    </div>
</div>
