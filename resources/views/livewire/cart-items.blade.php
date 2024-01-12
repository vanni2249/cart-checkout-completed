<div>

    @forelse ($items as $hash => $item)
    <x-cart-item :item="$item" :hash="$hash" key="$item->getId()"/>
    @empty
    <div class="bg-white p-4 rounded">
        <p>Empty</p>

    </div>
    @endforelse
</div>