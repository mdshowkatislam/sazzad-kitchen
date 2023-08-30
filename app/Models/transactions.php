<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;
    protected $table='transactions';

    public function order()
    {
        return $this->belongsTo(order::class,'order_id');
    }
}