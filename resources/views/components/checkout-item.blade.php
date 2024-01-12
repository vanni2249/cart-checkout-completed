<div class="bg-white border rounded p-2">
    <div class="grid grid-cols-4 gap-2">
        <div class="bg-gray-200 h-40"></div>
        <div class="col-span-2 space-y-2">
            <h2 class="text-md font-semibold">{{$item->getTitle()}}</h2>
            <p class="text-sm text-gray-600">Quantity: {{$item->getQuantity()}}</p>
            <div>
                @forelse ($item->getOptions() as $options)
                    <span class="text-sm text-gray-600">{{$options['label']}}</span>
                @empty
                    
                @endforelse
            </div>
        </div>
        <div class="flex flex-col items-end space-y-2">
            <p class="text-lg font-semibold">@money($item->getPrice())</p>
        </div>
    </div>

</div>