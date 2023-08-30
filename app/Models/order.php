<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable=['id','user_id','product_id','subtotal','discount','tax','total','firstname','lastname','mobile','email','line1','line2','city','province','country','zipcode','status','is_shipping_different','delivered_date','canceled_date'];

     public function orderItems(){
         return $this->hasMany(order_items::class,'order_id');
         
     }

     public function shipping(){
         return $this->hasOne(shippings::class,'order_id');

     }

     public function transaction(){

        return $this->hasOne(transactions::class,'order_id');
     }

}