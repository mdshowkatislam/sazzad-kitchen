<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;
    protected $table = "order_items";
    protected $fillable=['id','product_id','order_id','price','quantity','rstatus'];

    public function order(){
    return $this->belongsTo(order::class,'order_id');
    }
    public function product(){
         return $this->belongsTo(products::class,'product_id');
    }
    public function review(){
        return $this->hasOne(reviews::class,'order_items_id');
    }

}


