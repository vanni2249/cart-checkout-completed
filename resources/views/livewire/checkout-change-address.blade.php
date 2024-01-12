<div>

    <x-modal>
        <x-slot:title>
            <span class="text-xs text-blue-600">Change address</span>
        </x-slot:title>
        <div class="space-y-4">
            @foreach ($addresses as $address)
            <div wire:click="select('{{$address->id}}')" class="bg-gray-200 hover:shadow p-2 rounded cursor-pointer space-y-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <ul class="text-sm">
                    <li>Geovanni Colon Barrios</li>
                    <li>{{$address->line_one}}</li>
                    <li>{{$address->line_two}}</li>
                    <li>
                        <span>{{$address->city}}</span>
                        <span class="uppercase">{{$address->state}}</span>
                        <span>{{$address->zip}}</span>
                    </li>
                </ul>
            </div>

            @endforeach

        </div>

    </x-modal>
</div>