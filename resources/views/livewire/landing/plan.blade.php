<div class="container mx-auto my-[50px] px-[10px]">
    <div class="text-center mx-auto">
        <h1 class="text-[1.2rem] font-bold text-jf-white">STEP 2 OF 3</h1>
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">SELECT YOUR PLAN</h1>
        <p>Choose your best subscription plan.</p>
    </div>
    <form wire:submit="save">
        <div class="flex justify-center border-jf-white3 border w-max mx-auto mt-[50px] p-[10px] rounded-[15px] gap-x-[10px]">
            <button wire:click='planNavigationSelected("MONTHLY")' type="button" class="{{ $planNavigation == 'MONTHLY' ? 'bg-jf-yellow text-jf-black' : '' }} px-[50px] font-CreatoDisplayBold py-[10px] rounded-[15px] transition-all">Monthly</button>
            <button wire:click='planNavigationSelected("YEARLY")' type="button" class="{{ $planNavigation == 'YEARLY' ? 'bg-jf-yellow text-jf-black' : '' }} px-[50px] font-CreatoDisplayBold py-[10px] rounded-[15px] transition-all">Yearly</button>
        </div>
        <div class="flex flex-row flex-wrap my-[50px] gap-[10px] justify-center">
            @foreach ($plans as $plan)
                @if ($plan->id != 5)
                    @if ($plan->duration == 'MONTHLY')
                        <label class="{{ $planNavigation == 'MONTHLY' ? 'block' : 'hidden' }} w-full md:w-[calc(35%-10px)] border border-jf-white p-[20px] rounded-[5px] hover:border-jf-yellow hover:cursor-pointer
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
                    @elseif ($plan->duration == 'YEARLY')
                        <label class="{{ $planNavigation == 'YEARLY' ? 'block' : 'hidden' }} w-full md:w-[calc(35%-10px)] border border-jf-white p-[20px] rounded-[5px] hover:border-jf-yellow hover:cursor-pointer
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
                    @endif
                @endif
            @endforeach
        </div>
        <div class="flex flex-col">
            <button wire:click='freeAccess' class="hover:text-jf-yellow mt-[50px] underline w-max mx-auto">Continue with Free Access</button>
            <button class="bg-jf-yellow text-jf-black font-bold py-[10px] px-[50px] rounded-[5px] mt-[50px] w-max mx-auto" type="submit">NEXT</button>
        </div>
    </form>
</div>
