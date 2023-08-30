<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\products;
use Livewire\WithPagination;
use Illuminate\Support\Facades\App;


class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteProduct($id)
    {

        $product = products::find($id);
        if($product->image)
        {
            unlink('images/products'.'/'.$product->image);
        }
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
        $product->delete();
        session()->flash('message','Product has been deleted successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $products = products::where('name', 'LIKE', $search)
                   ->orwhere('price', 'LIKE', $search)

                    ->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
