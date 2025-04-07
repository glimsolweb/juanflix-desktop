<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-jf-yellow w-full ms-0 py-[5px] text-jf-black font-bold rounded-[5px]']) }}>
    {{ $slot }}
</button>
