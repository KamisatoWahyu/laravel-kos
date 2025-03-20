<x-admin-panel-layout title="Daftar Penyewa">
    {{-- Modal Action --}}
    <x-slot name="modalActionHeader">
        <x-modal-form class="ml-4" modal-button="Tambah Penyewa" button-classes="bg-blue-600 font-medium text-xs">
            <x-slot name="formContent">
                <x-input-form
                    type="text"
                    id="name">
                    Nama
                </x-input-form>
                <x-option-form
                    id="room_id"
                    option="Nomor Kamar"
                    :options="$rooms">
                    Nomor Kamar
                </x-option-form>
                <x-input-form
                    type="text"
                    id="handphone_number">
                    No. Handphone
                </x-input-form>
                <x-input-form
                    type="text"
                    id="address">
                    Alamat
                </x-input-form>
                <x-input-form
                    type="text"
                    id="nik">
                    NIK
                </x-input-form>
                <x-input-form
                    type="text"
                    id="profile_photo">
                    Foto
                </x-input-form>
                <x-input-form
                    type="text"
                    id="ktp_image">
                    KTP
                </x-input-form>
                <x-input-form
                    type="date"
                    id="check_in_date">
                    Check In
                </x-input-form>
            </x-slot>
        </x-modal-form>
    </x-slot>

    {{-- Main menu --}}
    <x-slot name="main">
        <x-table :headers="['No', 'Nama', 'Ruang', 'Alamat', 'Aksi']">
            @if (isset($tenants))
                @foreach ($tenants as $tenant)
                    <x-table-row>
                        <x-table-cell>{{ $tenant->id }}</x-table-cell>
                        <x-table-cell>{{ $tenant->name }}</x-table-cell>
                        <x-table-cell>{{ $tenant->room->room_number }}</x-table-cell>
                        <x-table-cell>{{ $tenant->address }}</x-table-cell>
                        <x-table-cell class="flex flex-row gap-2">
                            {{-- Modal Edit --}}
                            <x-modal-form modal-button="Edit" button-classes="bg-yellow-600 font-medium text-xs">
                                <x-slot name="formContent">
                                    <x-input-form type="text" id="name" placeholder="">Nomor Kamar</x-input-form>
                                    <x-input-form type="text" id="name" placeholder="">Tipe Kamar</x-input-form>
                                    <x-input-form type="text" id="name" placeholder="">Fasilitas</x-input-form>
                                    <x-input-form type="text" id="name" placeholder="">Harga</x-input-form>
                                    <x-input-form type="text" id="name" placeholder="">Status</x-input-form>
                                    <x-option-form id="sapi">Ayam</x-option-form>
                                </x-slot>
                            </x-modal-form>
                            {{-- Modal Delete --}}
                            <x-modal-delete modal-button="Hapus" button-classes="bg-red-600 font-medium text-xs">
                                <x-slot name="description">
                                    Apakah anda yakin ingin menghapus penyewa {{ $tenant->name }}?
                                </x-slot>
                            </x-modal-delete>
                        </x-table-cell>
                    </x-table-row>
                @endforeach
            @else
                <x-table-row>
                    <x-table-cell>Kosong</x-table-cell>
                </x-table-row>
            @endif
        </x-table>
    </x-slot>
</x-admin-panel-layout>
