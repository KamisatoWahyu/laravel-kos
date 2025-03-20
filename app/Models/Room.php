<?php

namespace App\Models;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'room_number',
        'room_type',
        'room_facility',
        'price',
        'status',
    ];
    public function room(){
        return $this-> hasOne(Tenant::class);
    }
}
