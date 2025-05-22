<div class="container mx-auto my-[50px] px-[5px]">
    <div class="text-center mx-auto">
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">SELECT CONTENT</h1>
        <p>For better experience, we recommend to select your preferred contents / genres.</p>
        <form wire:submit='save'>
            <div class="flex flex-wrap gap-[10px] md:gap-[20px] justify-center my-[50px]">
                @foreach ($contentGenre as $genre)
                    @php
                        $isSelected = in_array($genre->id, $content_genre_id ?? []);
                    @endphp
                    <label class="border rounded-[5px] w-[calc(33.3%-20px)] flex items-center justify-center flex-row md:flex-col flex-wrap p-[10px] md:p-[50px] gap-[10px] bg-jf-gray3 border-jf-gray2 hover:cursor-pointer transition-all
                    {{ $isSelected ? 'bg-jf-yellow' : '' }}"
                    >
                        <input class="hidden" type="checkbox" value="{{ $genre->id }}" wire:model="content_genre_id" wire:click='selectedContentGenre'>
                        <img class="bg-white rounded-full md:w-[100px] md:h-[100px] p-[10px]" src="{{ asset('storage/'.$genre->genre_icon) }}" alt="{{ $genre->name }}">
                        <p class="md:text-[1.5rem] {{ $isSelected ? 'text-jf-black' : '' }}">{{ $genre->name }}</p>
                    </label>
                @endforeach
            </div>
            <div>
                @error('selected_icon')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
            </div>
            <div class="flex mx-auto text-jf-black md:gap-x-[20px] mt-[50px] flex-wrap flex-col md:flex-row gap-[10px] w-full md:w-max">
                <button class="bg-jf-yellow font-bold py-[10px] px-[50px] rounded-[5px]" type="submit">CONTINUE TO HOMEPAGE</button>
            </div>
        </form>
    </div>
</div>
