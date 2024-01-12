@foreach ($items as $hash => $item)
<div class="space-y-4">
    <x-checkout-item :item="$item" :hash="$hash" />
</div>
@endforeach