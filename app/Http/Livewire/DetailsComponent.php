<?php
namespace App\Http\Livewire;
use App\Models\products;
use App\Models\sales;
use Livewire\Component;
use Cart;
class DetailsComponent extends Component

{
         public $id1;
         public $qty;

             public function mount($id){
             $this->id1=$id;
             $this->qty=1;
         }
         public function store($product_id,$product_name,$product_price){

                Cart::add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\products');

                session()->flash('success_message','Item Added in Cart nicely! thanks');
                return redirect()->route('product.cart');

         }

         public function increaseQuantity(){
                  $this->qty++;

         }
         public function decreaseQuantity(){
             if($this->qty>1){
                 $this->qty--;
             }

         }
    public function render()
    {
         $product=products::where('id',$this->id1)->first();


         $popular_products=products::where('condition','popular')->limit(5)->get();
         $related_products=products::where('categories_id',$product->categories_id)->inRandomOrder()->limit(5)->get();
         $sale=sales::find(1);


        return view('livewire.details-component',[
            'product'=>$product,
             'popular_products'=>$popular_products,
             'related_products'=>$related_products,
             'sale'=>$sale])
             ->layout('layouts.base');
    }
}
