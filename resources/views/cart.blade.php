<x-layouts>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-6">
            <div class="col-span-4 lg:col-span-3 p-4 bg-gray-200 border rounded space-y-4">
                <h1 class="text-xl font-black">Cart</h1>
                <div class="">
                    @livewire('cart-items')
                </div>
            </div>
            <div class="col-span-4 lg:col-span-1">
                @livewire('cart-balance')
                <div class="bg-gray-200 rounded p-4">
                    <div class="bg-white rounded p-4">Anuncio</div>
                </div>
            </div>
        </div>
    </div>
    {{-- @livewire('cart-items') --}}
</x-layouts>