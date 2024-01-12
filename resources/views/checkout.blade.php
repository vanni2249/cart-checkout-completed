<x-layouts>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-6">
            <div class="col-span-4 lg:col-span-3 p-4 bg-gray-200 border rounded space-y-4">
                <h1 class="text-xl font-black">Checkout</h1>
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-1">
                        <h2 class="text-sm text-gray-600">Shipping address</h2>
                    </div>
                    <div class="col-span-3">
                        <div class="bg-white rounded p-4 space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            @livewire('checkout-selected-address')
                            
                            <ul class="flex space-x-4">
                                <li>
                                    @livewire('checkout-add-address')
                                </li>
                                <li>
                                    @livewire('checkout-change-address')
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <h2 class="text-sm text-gray-600">Shipping address</h2>
                    </div>
                    <div class="col-span-3">
                        <div class="bg-white rounded p-4 space-y-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>

                            <ul class="text-sm">
                                <li>Visa ending 5467</li>
                                <li>Billing address: Same as shipping address</li>
                                <li>Urb. Villas del Prado</li>
                                <li>Juana Diaz PR 00795</li>
                            </ul>
                            <ul class="text-xs text-blue-500 flex space-x-4">
                                <li>
                                    <a href="#">Add payment method</a>
                                </li>
                                <li>
                                    <a href="#">Change payment method</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <h2 class="text-sm text-gray-600">Items</h2>
                    </div>
                    <div class="col-span-3">
                        @livewire('checkout-items')

                    </div>
                </div>
            </div>
            <div class="col-span-4 lg:col-span-1">
                @livewire('checkout-balance')

            </div>
        </div>
    </div>
</x-layouts>