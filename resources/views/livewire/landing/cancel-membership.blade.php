<div class="container mx-auto my-[50px] px-[20px]">
    <div class="text-center mx-auto">
        <div class="w-max mx-auto bg-jf-gray2 rounded-full p-[10px] mb-[20px]">
            <i class="fa-solid fa-circle-exclamation text-jf-yellow text-[4rem]"></i>
        </div>
        <h1 class="text-[2.1rem] font-bold text-jf-yellow">CANCEL MEMBERSHIP</h1>
        <p>If you're sure you'd like to cancel your membership, click the finish cancelation below.</p>
    </div>
    <div class="flex flex-col bg-jf-black2 p-[20px_40px] md:p-[30px_50px] rounded-[5px] max-w-[650px] mt-[50px] mx-auto">
        <ol class="list-disc">
            <li>
                <p>Cancellation will be effective at the end of your current billing period on September 3, 2025.</p>
            </li>
            <li>
                <p>Comeback anytime. If you restart within 3 months, your profiles, viewing preferences and account details will be waiting for you.</p>
            </li>
        </ol>
        <hr class="my-[30px]">
        <div class="flex text-jf-black md:gap-x-[20px] flex-wrap flex-col md:flex-row gap-[10px] w-full justify-center">
            <flux:modal.trigger name="delete-profile">
                <flux:button class="!bg-jf-yellow py-[10px] px-[10px] !text-jf-black md:px-[50px] rounded-[5px] !font-bold text-center">CANCEL MEMBERSHIP</flux:button>
            </flux:modal.trigger>
        </div>
    </div>

    {{-- Modal to Cancel Membership --}}
    <flux:modal name="delete-profile" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Cancel Membership?</flux:heading>
                <flux:text class="mt-2">
                    <p>You're about to cancel your membership.</p>
                    <p>This action cannot be reversed.</p>
                </flux:text>
            </div>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Back</flux:button>
                </flux:modal.close>
                <flux:button wire:click='cancelMembershipPlan' type="submit" variant="danger">Cancel Membership</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
