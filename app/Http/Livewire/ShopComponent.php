<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\products;
use Livewire\WithPagination;
use App\Models\Categories;

use Cart;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->min_price = 70;
        $this->max_price = 500;
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

    use WithPagination;

    public function render()
    {
        if($this->sorting=='date')
        {
            $products = products::whereBetween('price',[$this->min_price,$this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);


        }
        else if($this->sorting=="price")
        {
            $products = products::whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price-desc")
        {
            $products = products::whereBetween('price',[$this->min_price,$this->max_price])->orderBy('price','DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = products::whereBetween('price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }


        $categories = Categories::get();
        // dd($categories);

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        $pp=products::where('condition','special')->limit(7)->orderBy('id','DESC')->get();

        return view('livewire.shop-component',[
            'pp'=>$pp,
            'products'=> $products,
            'categories'=>$categories])->layout('layouts.base');
    }
}
