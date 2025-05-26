<div>
    <div class="flex flex-row justify-between mt-4">
        <p class="text-jf-white3">MY PLAN</p>
        <a href="" class="group hover:text-jf-yellow">Change Plan <i class="group-hover:text-jf-yellow fa-solid fa-chevron-right"></i></a>
    </div>
    <div class="w-full my-[20px] md:w-[calc(25%-10px)] border border-jf-white p-[20px] rounded-[5px] hover:border-jf-yellow hover:cursor-pointer
    ">
        <input class="hidden" type="radio" value="" wire:model="planSelected">
        <p class="mx-auto md:mx-0 text-jf-black text-[0.8rem] bg-jf-yellow p-[8px_20px] w-max text-center font-bold rounded-full"></p>
        <p class="text-center md:text-left text-[2rem] font-bold my-[20px]">₱
            <span class="text-[1rem] font-normal">/
                {{-- @if ($plan->duration == 'MONTHLY')
                    per month
                @else
                    per year
                @endif --}}
            </span>
        </p>
        <p class="text-jf-yellow">BENEFITS:</p>
        {{-- @foreach ($plan->features as $key => $feature ) --}}
            <div class="flex justify-between border-b-jf-gray last:border-none border-b py-[10px] text-[0.9rem]">
                <div class="flex gap-x-[5px] w-[40%]">
                    <i class="fa-solid fa-circle-check mt-[5px]"></i>
                    <p></p>
                </div>
                <p class="w-[40%] flex justify-end"></p>
            </div>
        {{-- @endforeach --}}
        </div>
</div>
