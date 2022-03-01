<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-cart size="30" color="white"></x-cart>
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">69</span>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="py-6 px-4">
                <p class="text-center text-gray-700">
                   Your Cart Cart is empty
                </p>
            </div>
        </x-slot>
    </x-jet-dropdown>    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
