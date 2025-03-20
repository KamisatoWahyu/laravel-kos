<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('pages.room' ,compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string',
            'room_type' => 'required|in:Furniture,Kosongan',
            'room_facility' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
            'status' => 'required|in:Ada,Terisi,Perbaikan'
        ]);

         // Take last id
        $lastRoom = Room::latest('id')->first();
        $lastNumber = $lastRoom ? intval(substr($lastRoom->id, 1)) : 0;

        // Make new id (A001, A002, etc)
        $newId = 'A' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        Room::create([
            'id' => $newId, // Simpan custom_id
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'room_facility' => $request->room_facility,
            'price' => $request->price,
            'status' => $request->status
        ]);

        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // $inputs = [
        //     ['id' => 'room_number', 'type' => 'text'],
        //     ['id' => 'room_type'],
        //     ['id' => 'room_facility', 'type' => 'text'],
        //     ['id' => 'status'],
        //     ['id' => 'price', 'type' => 'number'],
        // ];

        // $rooms = Room::all();
        // $room = $rooms->findOrFail($id);

        // return view('modules.modal-edit', compact($inputs, $room));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'room_number' => 'required|string',
            'room_type' => 'required|in:Furniture,Kosongan',
            'room_facility' => 'required|string|max:255',
            'price' => 'required|numeric|min:10000',
            'status' => 'required|in:Ada,Terisi,Perbaikan'
        ]);

        // Ambil data dari database
        $room = Room::findOrFail($id);

        // Update data
        $room->update([
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'room_facility' => $request->room_facility,
            'price' => $request->price,
            'status' => $request->status
        ]);

        // Redirect ke halaman daftar kamar dengan pesan sukses
        return redirect()->route('rooms.index')->with('success', 'Data kamar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Kamar berhasil dihapus!');
    }
}
