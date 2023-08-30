<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shippings extends Model
{
    use HasFactory;
    protected $table = "shippings";
    protected $fillable=['id','orders_id','firstname','lastname','mobile','email','line1','line2','city','province','country','zipcode'];
    
    public function order(){

        return $this->belongsTo(order::class,'orders_id');
    }
}