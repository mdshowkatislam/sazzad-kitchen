<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categories;
use App\Models\Home_categories;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public $selected_categories = [];
    public $numberofproducts;

    public function mount()
    {
        $category = Home_categories::find(1);
        $this->selected_categories = explode(',',$category->sel_categories);
        $this->numberofproducts = $category->no_of_products;
    }

    public function updateHome_Categories()
    {
        $category = Home_categories::find(1);
        $category->sel_categories = implode(',',$this->selected_categories);
        $category->no_of_products = $this->numberofproducts;
        $category->save();
        session()->flash('message','Home_Categories has been updated successfully!');
    }

    public function render()
    {
        $categories = Categories::all();

        return view('livewire.admin.admin-home-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
