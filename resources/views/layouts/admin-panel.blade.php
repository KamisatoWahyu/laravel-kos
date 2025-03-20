@props(['datas', 'tableHeaders' => null, 'tableCells', 'modalLabelForms'])

<x-app-layout>
    <x-sidebar />

    {{-- Main Content --}}
    <main class="grow">
        {{-- Title --}}
        <x-title level="h1" class="px-8 py-4 text-slate-700">Daftar Penyewa</x-title>

        {{-- Modal with button --}}
        @if (isset($modalActionHeader) && $modalActionHeader->isNotEmpty())
            <div class="w-full px-8">
                <div class="p-2 bg-gray-300 rounded-sm shadow-inner">
                    {{ $modalActionHeader }}
                </div>
            </div>
        @endif

        {{-- Table --}}
        <section class="px-8 py-4">
            {{ $main }}
        </section>

    </main>
</x-app-layout>
