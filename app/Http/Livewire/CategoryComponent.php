<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\products;
use Livewire\WithPagination;
use App\Models\Categories;

use Cart;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;


    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->category_slug = $category_slug;

    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\products');
        session()->flash('success_message', 'Item added in cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;




    public function render()
    {
        $category_id = null;
        $category_title = "";
        $filter = "";


            $category = Categories::where('slug',$this->category_slug)->first();
            $category_id = $category->id;
            $category_title = $category->title;
            $filter = "";


        if($this->sorting=='date')
        {
            $products = products::where($filter.'categories_id',$category_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price")
        {
            $products = products::where($filter.'categories_id',$category_id)->orderBy('price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price-desc")
        {
            $products = products::where($filter.'categories_id',$category_id)->orderBy('price','DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = products::where($filter.'categories_id',$category_id)->paginate($this->pagesize);
        }

        $categories = Categories::all();

        return view('livewire.category-component',[
            'products'=> $products,
            'categories'=>$categories,
             'category_title'=>$category_title])->layout('layouts.base');
    }
}
