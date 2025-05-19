<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-jf-yellow w-full !ms-0 py-[8px] px-[10px] text-jf-black font-bold rounded-[5px]']) }}>
    {{ $slot }}
</button>
