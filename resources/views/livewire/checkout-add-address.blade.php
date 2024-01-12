<div>
    <x-modal modal=true>
        <x-slot:title>
            <span class="text-xs text-blue-600">Add address</span>
        </x-slot:title>
        <div class="space-y-2">
            <div class="form-control">
                <label for="" class="label">Country</label>
                <input type="text" class="input-text" value="United State">
            </div>
            <div class="form-control">
                <label for="" class="label">Line one</label>
                <input wire:model='line_one' type="text" class="input-text">
            </div>
            <div class="form-control">
                <label for="" class="label">Line two</label>
                <input wire:model='line_two' type="text" class="input-text">
            </div>
            <div class="form-control">
                <label for="" class="label">City</label>
                <input wire:model='city' type="text" class="input-text">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="form-control">
                    <label for="" class="label">State</label>
                    <input type="text" class="input-text" value="Puerto Rico">
                </div>
                <div class="form-control">
                    <label for="" class="label">Zip code</label>
                    <input wire:model='zip' type="text" class="input-text">
                </div>

            </div>
            <div class="flex flex-row items-center space-x-2">
                <input wire:model='default' type="checkbox">
                <span class="text-xs">This address is default?</span>

            </div>
            <div class="form-control">
            </div>
            <button wire:click='create' class="btn btn-full btn-primary">Send</button>
        </div>

    </x-modal>
</div>