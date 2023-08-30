<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categories;
use App\Models\products;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $quantity;
    public $price;
    public $category;
    public $short_desc;
    public $des;
    public $aditional_desc;
    public $gallery;
    public $file_path;
    public $image;
    public $images;
    public $newimage;
    public $newimages;
    public $condition;
    public $discount;
    public $categories_id;





    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',

            'price' => 'required|numeric',
            'category' => 'required',
            'short_desc' => 'required',
            'des' => 'required',
            'aditional_desc' => 'required',

            'gallery' => 'required',
            'file_path' => 'required',

            'categories_id' => 'required'
        ]);
    }

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'short_desc' => 'required',
            'des' => 'required',
			      'aditional_desc' => 'required',
				         'gallery' => 'required',
						  'file_path' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png',
            'categories_id' => 'required'
        ]);

        $product = new products();
        $product->name = $this->name;
        $product->quantity = $this->quantity;
        $product->price = $this->price;
        $product->category = $this->category;

        $product->short_desc = $this->short_desc;
        $product->des = $this->des;
        $product->aditional_desc= $this->aditional_desc;
        $product->gallery = $this->gallery;
        $product->file_path = $this->file_path;



        $imageName = $this->image->getClientOriginalName();

        $this->image->storeAs('images/products',$imageName);
        $product->image = $imageName;

        if($this->images)
        {
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {

                $imgName = $image->getClientOriginalName();
                $image->storeAs('images/products',$imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $product->images = $imagesname;
        }

        $product->condition = $this->condition;
        $product->discount = $this->discount;
        $product->categories_id = $this->categories_id;


        $product->save();
        session()->flash('message','Product has been created successfully!');
    }



    public function render()
    {
        $categories = Categories::all();

        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
