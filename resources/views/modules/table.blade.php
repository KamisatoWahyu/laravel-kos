@props(['headers' => ['No.', 'Name', 'ID Card', 'Status']])

<div class="w-full rounded-lg overflow-hidden">
    <table class="w-full border-b-1">
        <thead class="bg-gray-600 text-white font-bold">
            <tr class="border border-gray-600">
                @foreach ($headers as $header)
                    <td class="py-2 text-sm text-center border border-gray-400">{{ $header }}</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
