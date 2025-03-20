<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('default');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// tenant
Route::get('/penyewa', [TenantController::class, 'index'])->name('tenant');

// room
Route::get('/kamar', [RoomController::class, 'index'])->name('rooms.index');
Route::post('/kamar/add', [RoomController::class, 'store'])->name('rooms.store');
Route::put('/kamar/{id}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');

// admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


