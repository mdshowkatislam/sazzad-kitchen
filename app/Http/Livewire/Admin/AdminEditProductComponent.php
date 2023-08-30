<?php
namespace App\Http\Livewire\Admin;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\products;
use App\Models\Categories;
use Livewire\WithFileUploads;


class AdminEditProductComponent extends Component
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


    public function mount($product_id)
    {
        $product = products::where('id', $product_id)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->quantity = $product->quantity;
        $this->price = $product->price;
        $this->category = $product->category;
        $this->short_desc = $product->short_desc;
        $this->des = $product->des;
        $this->aditional_desc = $product->aditional_desc;

        $this->gallery = $product->gallery;
        $this->file_path = $product->file_path;
        $this->image = $product->image;
        $this->images = explode(",", $product->images);
        $this->newimage = $product->newimage;
        $this->discount = $product->discount;
        $this->condition= $product->condition;
        $this->categories_id = $product->categories_id;


    }

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
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }
    }

    public function updateProduct()
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
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }
        $product = products::find($this->product_id);
        $product->name = $this->name;
        $product->short_desc = $this->short_desc;
        $product->des = $this->des;
        $product->price = $this->price;
        $product->quantity = $this->quantity;
        $product->category = $this->category;
        $product->file_path = $this->file_path;
        if($this->newimage)
        {

            if(file_exists(public_path('images/products/'.$product->image))){
                unlink('images/products'.'/'.$product->image);
            }
            // Image::make($image->getRealPath())->resize(468, 249)->save('public/images/products/'.$filename);
            // $imageName = Carbon::now()->timestamp.'.' . $this->newimage->extension();
            $imageName = $this->newimage->getClientOriginalName();
              $this->newimage->storeAs('images/products',$imageName);

            $product->image = $imageName;
        }

        if($this->newimages)
        {
            if($product->images)
            {
                $images = explode(",", $product->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/products'.'/'.$image);
                    }
                }
            }

            $imagesname = '';
            foreach($this->newimages as $key=>$image)
            {
            //    $imgName = Carbon::now()->timestamp. '.' . $image->extension();
                $imgName = $image->getClientOriginalName();

                   $image->storeAs('images/products',$imgName);

                $imagesname = $imagesname. ',' .$imgName;
            }
            $product->images = $imagesname;

        }
        $product->gallery = $this->gallery;
        $product->discount = $this->discount;
        $product->categories_id = $this->categories_id;
        $product->condition = $this->condition;

        $product->save();
        session()->flash('message','Product has been updated successfully!');
    }


    public function render()
    {
        $categories = Categories::all();


        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
