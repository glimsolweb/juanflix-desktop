<div class="container mx-auto my-[50px] px-[5px]">
    <div class="text-center mx-auto">
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">MANAGE PROFILES</h1>
        <p>Create multiple profiles before watching JuanFlix.</p>
        <div class="flex flex-wrap gap-[10px] md:gap-[20px] justify-center my-[50px]">
            @foreach ($profiles as $profile)
                <div class="flex flex-col gap-y-[10px]">
                    <a href="">
                        <img src="{{ asset('storage/' . $profile->profile_icons->image) }}" class="w-[130px] md:w-[150px] h-[130px] md:h-[150px] rounded-[5px] bg-jf-black border border-jf-white3" alt="Profiles">
                    </a>
                    <p class="text-jf-white3">{{ $profile->name }}</p>
                </div>
            @endforeach
            <div class="flex flex-col gap-y-[10px]">
                <a href="" class="w-[130px] md:w-[150px] h-[130px] md:h-[150px] rounded-[5px] bg-jf-black border border-jf-white3 flex justify-center items-center">
                    <i class="fa-solid fa-plus text-[4rem]"></i>
                </a>
                <p class="text-jf-white3">Add Profile</p>
            </div>
        </div>
        <div>
            @error('errorMessage')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
        </div>
        <div class="flex mx-auto text-jf-black md:gap-x-[20px] mt-[50px] flex-wrap flex-col md:flex-row gap-[10px] w-full md:w-max">
            <button class="bg-jf-yellow font-bold py-[10px] px-[50px] rounded-[5px]" type="submit">CONTINUE TO HOMEPAGE</button>
        </div>
    </div>
</div>
