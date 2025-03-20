@props(['modalButton' => 'default-class', 'buttonClasses' => 'default-class', 'route' => '#'])

@php
    $buttonClass = $buttonClasses ?? 'default-class';
@endphp

<div x-data="{ open: false }" {{ $attributes->merge(['class' => '']) }}>
    {{-- Modal Button --}}
    <x-button @click="open = ! open" class="{{ $buttonClass }}">{{ $modalButton }}</x-button>

    {{-- Modal Body --}}
    <div x-show="open" class="flex items-center justify-center fixed inset-0 bg-black/50"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="flex flex-col items-center w-1/3 bg-white rounded shadow-lg p-2">
            <x-title level="h3" class="text-center text-black">Hapus Penyewa</x-title>
            <div class="flex flex-col items-center p-4 h-auto w-full" @click.outside="open = false">
                <form action="{{ $route }}" method="POST" class="mt-4 flex flex-col items-center">
                    @csrf
                    @method('DELETE')
                    {{ $description }}
                    <x-button type="submit" class="bg-red-600 mt-4">Ya, Hapus</x-button>
                </form>
            </div>
        </div>
    </div>
</div>
