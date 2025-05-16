<div class="container mx-auto my-[50px]">
    <div class="text-center mx-auto">
        <h1 class="text-[1.2rem] font-bold text-jf-white">STEP 2 OF 3</h1>
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">SELECT YOUR PLAN</h1>
        <p>Choose your best subscription plan.</p>
    </div>
    <form wire:submit="save">
        <div class="flex flex-row flex-wrap my-[50px] gap-x-[10px] justify-center">
            @foreach ($plans as $plan)
                <label class="w-full md:w-[calc(25%-10px)] border border-jf-white p-[20px] rounded-[5px] hover:border-jf-yellow hover:cursor-pointer
                {{ $planSelected == $plan->id ? 'border-jf-yellow border-2' : 'border-jf-white' }}
                ">
                    <input class="hidden" type="radio" value="{{ $plan->id }}" wire:model="planSelected" wire:click='userPlanSelected'>
                    <p class="mx-auto md:mx-0 text-jf-black text-[0.8rem] bg-jf-yellow p-[8px_20px] w-max text-center font-bold rounded-full">{{ $plan->name }}</p>
                    <p class="text-center md:text-left text-[2rem] font-bold my-[20px]">₱{{ $plan->price }}
                        <span class="text-[1rem] font-normal">/
                            @if ($plan->duration == 'MONTHLY')
                                per month
                            @else
                                per year
                            @endif
                        </span>
                    </p>
                    <p class="text-jf-yellow">BENEFITS:</p>
                    @foreach ($plan->features as $key => $feature )
                        <div class="flex justify-between border-b-jf-gray last:border-none border-b py-[10px] text-[0.9rem]">
                            <div class="flex gap-x-[5px] w-[40%]">
                                <i class="fa-solid fa-circle-check mt-[5px]"></i>
                                <p>{{ $key }}</p>
                            </div>
                            <p class="w-[40%] flex justify-end">{{ $feature }}</p>
                        </div>
                    @endforeach
                </label>
            @endforeach
            <button class="bg-jf-yellow text-jf-black font-bold py-[10px] px-[50px] rounded-[5px] mt-[50px]" type="submit">NEXT</button>
        </div>
    </form>
</div>
