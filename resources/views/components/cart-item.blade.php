<div class="bg-white border rounded p-2">
    <div class="grid grid-cols-4 gap-2">
        <div class="bg-gray-200 h-40"></div>
        <div class="col-span-2 space-y-4">
            <h2 class="text-xl font-semibold">{{$item->getTitle()}}</h2>
            <div class="flex">
                <div class="border flex items-center">
                    <button wire:click="updateQuantityItemSubtraction('{{$hash}}')" class="bg-gray-200 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                        </svg>
                        
                    </button>
                    <input value='{{$item->getQuantity()}}' class="text-sm text-center p-1 w-12">
                    <button wire:click="updateQuantityItemSum('{{$hash}}')" class="bg-gray-200 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                          </svg>
                          
                    </button>
                </div>
            </div>
            <div class="flex flex-row space-x-1">
                <button class="border text-xs p-1 font-bold">Guaradar</button>
                <button wire:click="removeItem('{{$hash}}')" class="bg-red-200 text-red-600 text-xs p-1 font-bold">Eliminar</button>

            </div>
            <div>
                @forelse ($item->getOptions() as $options)
                    <span class="text-xs font-extrabold">{{$options['label']}}</span>
                @empty
                    
                @endforelse
            </div>
        </div>
        <div class="flex flex-col items-end space-y-2">
            <p class="text-lg font-semibold">@money($item->getPrice())</p>
        </div>
    </div>

</div>