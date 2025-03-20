<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'room_id',
        'name',
        'handphone_number',
        'address',
        'nik',
        'profile_photo',
        'ktp_image',
        'check_in_date',
    ];

    public function room(){
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function bill(){
        return $this->hasMany(Bill::class);
    }
}
