@props(['href'])

@php
    $isActive = request()->url() === url($href);
    $classes = 'text-gray-400 font-medium hover:text-blue-500 transition duration-300';
    if ($isActive) {
        $classes = 'text-blue-300 font-bold';
    }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
