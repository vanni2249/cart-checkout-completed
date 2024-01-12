<div wire:init="sendDataFromProductSelect">
    <div class="flex">
        <div class="border flex items-center">
            <button wire:click='subtraction' {{($quantity==1) ? 'disabled' : '' }} class="bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
            </button>
            <input wire:model='quantity' readonly class="text-sm p-2 w-12 text-center">
            <button wire:click='sum({{$product_id}})' {{($quantity==$available) ? 'disabled' : '' }}
                class="bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
            </button>
        </div>
    </div>
    <p class="text-xs py-4 font-semibold text-gray-800">{{$available}} Available</p>
</div>