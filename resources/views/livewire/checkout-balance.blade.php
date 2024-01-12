<div class="bg-gray-200 p-4 rounded">
    <div class="bg-white p-4 rounded space-y-4">
        <ul class="text-sm">
            <li class="flex flex-row justify-between">
                <span>Items:</span>
                <span>{{$items_count}}</span>
            </li>
            <li class="flex flex-row justify-between">
                <span>Product:</span>
                <span>{{$quantities_sum}}</span>
            </li>
            <li class="flex flex-row justify-between">
                <span>Sub total:</span>
                <span>@money($subtotal)</span>
            </li>
            <li class="flex flex-row justify-between">
                <span>Total:</span>
                <span>@money($total)</span>
            </li>
        </ul>
        @livewire('complete-order')
    </div>
</div>