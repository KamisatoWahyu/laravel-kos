@props(['id' => null, 'option' => 'Option', 'options' => ['Option']])

<div class="w-full flex flex-col gap-1 mb-2">
    <x-label for="{{ $id }}">{{ $slot }}</x-label>
    <select
        name="{{ $id }}"
        id="{{ $id }}"
        {{ $attributes->merge([
            'class' => 'w-full bg-white p-1 text-sm rounded text-black border border-gray-200 focus:outline-none',
        ]) }}
    >
        <option disabled selected>{{ $option }}</option>
        @foreach ($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
