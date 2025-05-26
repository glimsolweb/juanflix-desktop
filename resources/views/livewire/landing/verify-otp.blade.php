<div class="container mx-auto my-[50px]" wire:poll.1000ms='decrementCounter'>
    <div class="text-center mx-auto">
        <h1 class="text-[2.5rem] font-bold text-jf-yellow">VERIFY YOUR ACCOUNT</h1>
        <p>Enter the code from the email we sent to {{ $user->email }}</p>
        <form wire:submit="submitOtp">
            <div class="flex items-center gap-x-[10px] justify-center mt-[50px]" id="otp-container">
                <input
                type="text"
                maxlength="1"
                wire:model='otp1'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
                <input
                type="text"
                maxlength="1"
                wire:model='otp2'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
                <input
                type="text"
                maxlength="1"
                wire:model='otp3'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
                <input
                type="text"
                maxlength="1"
                wire:model='otp4'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
                <input
                type="text"
                maxlength="1"
                wire:model='otp5'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
                <input
                type="text"
                maxlength="1"
                wire:model='otp6'
                class="w-[50px] md:w-[70px] h-[40px] md:h-[60px] font-semibold outline-none text-xl text-jf-yellow text-center border rounded-md transition-all bg-jf-gray3 border-gray-300 focus:border-jf-yellow"
                />
            </div>
            <div class="flex flex-row justify-center mt-[30px] gap-x-[5px]">
                <p>Didn't get the code?</p>
                @if ($otpCounter > 0)
                    <button type="button" class="text-jf-yellow cursor-not-allowed" disabled>Resend (in {{ $otpCounter }} sec)</button>
                @else
                    <button type="button" class="text-jf-yellow" wire:click='resendOtp'>Resend Code</button>
                @endif
            </div>
            <div>
                @error('otp')<span class="error my-2 text-jf-red block">{{ $message }}</span>@enderror
            </div>
            <div class="flex text-jf-black md:gap-x-[20px] mt-[80px] flex-wrap flex-row gap-[10px] w-full md:w-full justify-center">
                <button class="bg-jf-yellow py-[10px] px-[50px] rounded-[5px] w-[80%] md:w-max font-bold" type="submit">SUBMIT CODE</button>
            </div>
        </form>
    </div>
</div>

@script
<script>
const otpInputs = document.querySelectorAll("#otp-container input");

  otpInputs.forEach((input, index) => {
    input.addEventListener("input", (e) => {
      const value = e.target.value;
      if (/^\d$/.test(value)) {
        if (index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      } else {
        e.target.value = "";
      }
    });

    input.addEventListener("keydown", (e) => {
      if (e.key === "Backspace" && e.target.value === "" && index > 0) {
        otpInputs[index - 1].focus();
      }
    });
  });
</script>
@endscript
