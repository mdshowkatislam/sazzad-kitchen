<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categories;

use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;
    public $summary;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }

    public function storeCategory()
    {

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);




            $category = new Categories();
            $category->title = $this->name;
            $category->slug = $this->slug;
            $category->summary = $this->summary;
            $category->save();

        session()->flash('message', 'Category has been created successfully');
    }

    public function render()
    {
        $categories = Categories::all();


        return view('livewire.admin.admin-add-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
