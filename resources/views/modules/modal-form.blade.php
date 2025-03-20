@props(['modalButton' => 'default-button', 'buttonClasses' => 'default-class', 'route' => '#'])

@php
    $buttonClass = $buttonClasses ?? 'default-class';
@endphp

<div x-data="{ open: false }" {{ $attributes->merge(['class' => '']) }}>
    {{-- Modal Button --}}
    <x-button @click="open = ! open" class="{{ $buttonClass }}">{{ $modalButton }}</x-button>

    {{-- Modal Body --}}
    <div x-show="open" class="fixed inset-0 bg-black/50 flex items-center justify-center"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="flex flex-col items-center w-1/3 bg-white rounded shadow-lg p-2">
            <x-title level="h3" class="text-center text-slate-700">Tambah Penyewa</x-title>
            <div class="flex flex-col items-center p-4 h-auto w-full max-h-[70vh] overflow-y-auto" @click.outside="open = false">
                <form action="{{ $route }}" method="post" class="w-full flex flex-col items-center">
                    @csrf
                    {{ $formContent }}
                    <div class="border-t border-gray-300 my-4"></div>
                    <x-button class="w-1/3">Submit</x-button>
                </form>
            </div>
        </div>
    </div>
</div>
