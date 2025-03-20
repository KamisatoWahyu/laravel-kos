<nav x-data="{ open: true }" class="bg-slate-800 min-h-screen px-6 py-4 transition-all duration-300"
    x-bind:class="open ? 'w-1/5' : 'w-20'">
    {{-- Navigation title --}}
    <header class="mb-10 flex flex-row justify-between items-center">
        <div class="text-xl text-white font-bold">
            <i class="bi bi-buildings" x-show="open"></i>
            <x-nav-link class="px-2 " :href="route('default')" x-show="open" x-cloak
                x-transition:enter="transition-opacity duration-300 delay-300">
                Catatan Kos
            </x-nav-link>
        </div>

        <div class="text-white text-xl cursor-pointer" @click="open = ! open">
            <i class="bi" x-bind:class="open ? 'bi-arrow-left-square-fill' : 'bi-arrow-right-square-fill'"></i>
        </div>
    </header>

    {{-- Navigation link --}}
    <ul class="flex flex-col gap-2 ml-4 mb-4" x-show="open" x-transition>
        <li><x-nav-link class="text-lg" :href="route('dashboard')">Halaman Utama</x-nav-link></li>
        <li><x-nav-link class="text-lg" :href="route('tenant')">Penyewa</x-nav-link></li>
        <li><x-nav-link class="text-lg" :href="route('rooms.index')">Kamar</x-nav-link></li>
    </ul>

    {{-- Dropdown link --}}
    <section class="mt-4 ml-4 mb-4" x-show="open">
        <x-dropdown>
            <x-slot name="trigger">Keuangan</x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('default')">Daftar Pembayaran</x-dropdown-link>
                <x-dropdown-link :href="route('default')">Rekaman Pembayaran</x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </section>

    {{-- Navigation link --}}
    <ul class="flex flex-col gap-2 ml-4" x-show="open">
        <li><x-nav-link class="text-lg" :href="route('admin')">Admin</x-nav-link></li>
        <li><x-nav-link class="text-lg" :href="route('default')">Logout</x-nav-link></li>
    </ul>
</nav>
