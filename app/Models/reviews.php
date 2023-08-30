<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table ="reviews";
    protected $fillable=['id','user_id','product_id','rate','comment','status','order_items_id'];

    public function orderItem()
    {
        return $this->belongsTo(order_items::class,'order_items_id');
    }
}
