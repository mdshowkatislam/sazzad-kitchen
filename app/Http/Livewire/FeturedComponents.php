<?php

namespace App\Http\Livewire;

use App\Models\products;
use Livewire\Component;

class FeturedComponents extends Component
{
    public $name;
    public function mount($name){
        $this->name=$name;
    }
    public function render()
    {


        $fproducts=products::where('condition','=',$this->name)->get();


        return view('livewire.fetured-components')->with('products',$fproducts)->layout('layouts.base');
    }
}
