<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table="products";
 protected $fillable=['id','name','quantity','price',
                      'category','short_desc','des','aditional_desc',
                      'gallery','file_path','image','images',
                      'condition','discount','categories_id'];
    // custom property accessor for currency
    protected $appends=['pws'];
    public function getPWSAttribute(){
        return '৳' .$this->price;
    }

    public function category(){
        return $this->belongsTo(Categories::class);
    }

       public function order_items(){
                  return $this->hasMany(order_items::class,'product_id');
       }

}
