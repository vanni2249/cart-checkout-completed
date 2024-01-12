<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- Style --}}
    @vite('resources/css/app.css')

    {{-- Livewire --}}
    @livewireStyles

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none
        }
    </style>
</head>

<body class="flex flex-col min-h-screen space-y-4">
    <nav>
        <div class="bg-gray-200">
            <div class="container mx-auto">
                <div class="flex flex-row justify-between py-4 px-4 md:px-0">
                    <div>
                        <a href="/">
                            Logo
                        </a>
                    </div>
                    <div class="relative">
                        <a href="/cart" class="flex space-x-1">
                            <span>
                                Cart
                            </span>
                            <span>
                                @livewire('cart-quantities-sum')

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="flex-grow">
        {{$slot}}
    </main>
    <footer>
        Footer
    </footer>
    @livewireScripts
</body>

</html>