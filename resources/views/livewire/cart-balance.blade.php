<div>
    @if ($items_count)
    {{-- <div class="col-span-4 lg:col-span-1"> --}}
        <div class="bg-gray-200 p-4 rounded mb-4">
            <div class="bg-white p-4 rounded space-y-4">
                <ul class="text-sm">
                    <li class="flex flex-row justify-between">
                        <span>Items</span>
                        <span>{{$items_count}}</span>
                    </li>
                    <li class="flex flex-row justify-between">
                        <span>Product</span>
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
                <a href="{{ route('checkout') }}"
                    class="bg-yellow-500 block w-full text-center py-2 rounded text-sm font-semibold">
                    Checkout
                </a>
            </div>
        </div>
        {{--
    </div> --}}
    @endif

</div>