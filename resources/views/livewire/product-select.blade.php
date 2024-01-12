<div wire:init="sendDataFromProductSelect">

    <div class="flex flex-col space-y-2">
        @if ($item->attributes()->count())

        @foreach ($item->attributes as $attribute)
        <h2 class="text-xs font-semibold uppercase">{{$attribute->name}}</h2>
        <select wire:model='options.{{$attribute->name}}.label'' name="" id="" class="border p-2">
            @foreach ($attribute->options()->where('attribute_id',$attribute->id)->get() as $option)
            <option value="{{$option->name}}">{{$option->name}}</option>

            @endforeach
        </select>
        @endforeach

        @endif

    </div>
</div>