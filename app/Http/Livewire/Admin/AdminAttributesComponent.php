<?php

namespace App\Http\Livewire\Admin;



use Livewire\Component;
use App\Models\ProductAttribute;


class AdminAttributesComponent extends Component
{
    public function deleteAttribute($x){
        $productattribute=ProductAttribute::find($x);
        $productattribute->delete();
        session()->flash('message','Attribute have been deleted successfully');

    }

    public function render()
    {
        
        $pat=ProductAttribute::paginate(3);

        return view('livewire.admin.admin-attributes-component',['pat'=>$pat])->layout('layouts.base');
    }
}
