<?php

namespace App\Http\Livewire;

use Cart;

use App\Models\banners;
use Livewire\Component;
use App\Models\products;
use App\Models\Categories;
use App\Models\Newsletter;

use Illuminate\Support\Facades\Auth;



class HomeComponent extends Component
{
    public $email;
      public $status=1;

      public function updated($field){
          $this->validateOnly($field,[
              'email'=>'required | email'
          ]);
      }

      public function Savenewsletter(){


        $this->validate([
            'email'=>'required | email'
        ]);
        $edata=Newsletter::where('email','=', $this->email)->first();
        if($edata===null){
            $nl=new Newsletter();
             $nl->email=$this->email;

            $nl->status=$this->status;

            $nl->save();
            session()->flash('message','Thank you for subscription');

        }
        else{
            session()->flash('message','You already entered your email');
        }
   }
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\products');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }
    public function addWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\products');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {

        $allproducts=new products();
        $banner=banners::where('status', 1)->get();
        $data = $allproducts::orderBy('id','ASC')->get();
        $specialtdata = $allproducts::where('condition','special')->orderBy('id','ASC')->limit(6)->get();

        $maincategories=Categories::all();

        $totalcategories=Categories::all();


        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }

        return view('livewire.home-component', [
                                'products' => $data,
                                'specialproducts' => $specialtdata,
                                'banner'=>$banner,

                                'totalcategories'=>$totalcategories,


                                'maincategories'=>$maincategories,

                             ])->layout('layouts.base');

    }
}
