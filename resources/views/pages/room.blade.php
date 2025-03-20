<x-admin-panel-layout title="Daftar Kamar">

    {{-- Modal Action --}}
    <x-slot name="modalActionHeader">
        <x-modal-form class="ml-4" modal-button="Tambah Penyewa" button-classes="bg-blue-600 font-medium text-xs" :route="route('rooms.store')">
            <x-slot name="formContent">
                <x-input-form
                    type="text"
                    id="room_number">
                    Nomor Kamar
                </x-input-form>
                <x-option-form
                    id="room_type"
                    option="Tipe Kamar"
                    :options="['Furniture', 'Kosongan']">
                    Tipe Kamar
                </x-option-form>
                <x-input-form
                    type="text"
                    id="room_facility">
                    Fasilitas Kamar
                </x-input-form>
                <x-input-form
                    type="text"
                    id="price">
                    Harga
                </x-input-form>
                <x-option-form
                    id="status"
                    option="Status Kamar"
                    :options="['Ada', 'Terisi', 'Perbaikan']">
                    Status
                </x-option-form>
            </x-slot>
        </x-modal-form>
    </x-slot>

    {{-- Main menu --}}
    <x-slot name="main">
        <x-table
            :headers="['ID Kamar', 'Nomor Kamar', 'Tipe Kamar', 'Fasilitas', 'Harga', 'Status', 'Aksi']">
            @if (isset($rooms))
                @foreach ($rooms as $data)
                    <x-table-row>
                        <x-table-cell>{{ $data->id }}</x-table-cell>
                        <x-table-cell>{{ $data->room_number }}</x-table-cell>
                        <x-table-cell>{{ $data->room_type }}</x-table-cell>
                        <x-table-cell>{{ $data->room_facility }}</x-table-cell>
                        <x-table-cell>Rp{{ $data->price }}</x-table-cell>
                        <x-table-cell>{{ $data->status }}</x-table-cell>
                        <x-table-cell class="flex flex-row gap-2">

                            {{-- Modal Edit --}}
                            <x-modal-form class="ml-4" modal-button="Edit" button-classes="bg-yellow-600 font-medium text-xs" :route="route('rooms.update', $data->id)">
                                <x-slot name="formContent">
                                    @method('PUT')
                                    <x-input-form
                                        type="text"
                                        id="room_number"
                                        placeholder="{{ $data->room_number }}">
                                        Nomor Kamar
                                    </x-input-form>
                                    <x-option-form
                                        id="room_type"
                                        option="{{ $data->room_type }}"
                                        :options="['Furniture' => 'Furniture', 'Kosongan' => 'Kosongan']">
                                        Tipe Kamar
                                    </x-option-form>
                                    <x-input-form
                                        type="text"
                                        id="room_facility"
                                        placeholder="{{ $data->room_facility }}">
                                        Fasilitas Kamar
                                    </x-input-form>
                                    <x-input-form
                                        type="text"
                                        id="price"
                                        placeholder="{{ $data->price }}">
                                        Harga
                                    </x-input-form>
                                    <x-option-form
                                        id="status"
                                        option="{{ $data->status }}"
                                        :options="['Ada' => 'Ada', 'Terisi' => 'Terisi', 'Perbaikan' => 'Perbaikan']">
                                        Status
                                    </x-option-form>
                                </x-slot>
                            </x-modal-form>

                            {{-- Modal Delete --}}
                            <x-modal-delete
                                modal-button="Hapus"
                                button-classes="bg-red-600 font-medium text-xs"
                                :route="route('rooms.destroy', $data->id)">
                                <x-slot
                                    name="description">
                                    Apakah anda yakin ingin menghapus Kamar {{ $data->room_number }}?
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



