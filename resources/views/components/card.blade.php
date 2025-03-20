@props(['href' => null])

<section {{ $attributes->merge(['class' => 'class="flex flex-col bg-blue-500 w-auto rounded p-4']) }}>
    <x-title level="h3">{{ $title }}</x-title>
    <x-description>{{ $description }}</x-description>
    <x-nav-link class="text-left"  href="{{ $href }}">Ini adalah isi card</x-nav-link>
</section>
