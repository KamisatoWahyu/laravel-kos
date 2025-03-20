<x-app-layout>
    {{-- Sidebar --}}
    <x-sidebar />

    {{-- Main Content --}}
    <main class="grow">
        <x-title level="h1" class="p-8">Dashboard</x-title>
        <section class="grid grid-cols-4 gap-2 px-8">
            <x-card class="bg-blue-400" :href="route('tenant')">
                <x-slot name="title">Judul</x-slot>
                <x-slot name="description">Isi</x-slot>
            </x-card>
            <x-card class="bg-yellow-600" :href="route('tenant')">
                <x-slot name="title">Judul</x-slot>
                <x-slot name="description">Isi</x-slot>
            </x-card>
            <x-card class="bg-green-600" :href="route('tenant')">
                <x-slot name="title">Judul</x-slot>
                <x-slot name="description">Isi</x-slot>
            </x-card>
            <x-card class="bg-red-400" :href="route('tenant')">
                <x-slot name="title">Judul</x-slot>
                <x-slot name="description">Isi</x-slot>
            </x-card>
        </section>
    </main>
</x-app-layout>
