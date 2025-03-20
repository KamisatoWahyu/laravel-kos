<div class="flex flex-col gap-2" x-data="{ open: false }" @close.stop="open = false">
    <div @click="open = ! open">
        <x-dropdown-button>
            {{ $trigger }}
        </x-dropdown-button>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="flex flex-col gap-2 text-sm ml-4">
        {{ $content }}
    </div>
</div>
