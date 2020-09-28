
<p>This is the foo anonymous component!</p>

<div class="mt-6">
    @spinning
        <x-button
            class="bg-blue-600 hover:bg-blue-500 focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700"
        >
            Thanks!
        </x-button>
    @else
        <x-button
        yoyo:vars="q:2"
        class="bg-pink-600 hover:bg-pink-500 focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700"
        >
            Click me
        </x-button>
    @endspinning
</div>