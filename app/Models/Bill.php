<?php

namespace App\Models;

use App\Models\Tenant;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function tenant(){
        return  $this->belongsTo(Tenant::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
