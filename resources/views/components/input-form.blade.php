@props(['type' => 'text', 'id' => null])

<div class="w-full flex flex-col gap-1 mb-2">
    <x-label for="{{ $id }}">{{ $slot }}</x-label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $id }}"
        {{ $attributes->merge([
            'class' => 'w-full bg-white p-1 text-sm rounded text-black border border-gray-200 focus:outline-none',
        ]) }} />
</div>
