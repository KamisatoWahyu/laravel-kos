<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::with('room')->get();
        $rooms = Room::where('status', 'Ada')->pluck('room_number', 'id');
        return view('pages.tenant', compact('tenants', 'rooms'));
    }
}
