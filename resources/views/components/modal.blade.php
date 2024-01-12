@props(['modal' => false])

<div x-cloak x-data="{ open: @entangle('modal').defer }">
    <button @click="open = true">{{$title}}</button>
    <div x-cloak x-show="open"  class="fixed top-0 left-0 bg-black bg-opacity-50 w-full h-screen">
        <div class="flex justify-center mt-12 z-10">
            <div x-show="open" x-transition class="bg-white bg-opacity-100 rounded opacity-100 w-96 p-4 space-y-4">
                <header class="flex flex-row justify-between items-center">
                    <h2 class="text-sm font-semibold">Action</h2>
                    <button @click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                          
                    </button>
                </header>
                {{$slot}}
            </div>
        </div>
    </div>
</div>