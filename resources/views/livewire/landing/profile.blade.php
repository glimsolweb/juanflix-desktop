<div class="container mx-auto my-[50px] px-[5px]">
    <div class="text-center mx-auto">
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">ADD PROFILE</h1>
        <p>Add your profile before watching JuanFlix.</p>
    </div>
    <form wire:submit='save'>
        <div class="flex flex-col justify-center items-center">
            <livewire:component.profile-icon wire:model='selected_icon' />
            <input class="block w-[300px] bg-jf-gray-transparent text-jf-white3 rounded-[5px] border border-jf-white3" type="text" placeholder="Enter your name" wire:model='profile_name'>
            <div>
                @error('selected_icon')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
                @error('profile_name')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
                @error('errors')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
            </div>
            <div class="flex text-jf-black md:gap-x-[20px] mt-[50px] flex-wrap flex-col md:flex-row gap-[10px] w-full md:w-max">
                <button class="bg-jf-yellow py-[10px] px-[50px] rounded-[5px]" type="submit">CONTINUE</button>
                <button class="bg-jf-white py-[10px] px-[50px] rounded-[5px]" type="button">CANCEL</button>
            </div>
        </div>
    </form>
</div>
