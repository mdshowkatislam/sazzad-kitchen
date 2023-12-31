<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categories;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $summary;


    public function mount($category_slug)
    {

            $this->category_slug = $category_slug;
            $category = Categories::where('slug',$category_slug)->first();
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;



    }

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


    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);


            $category = Categories::find($this->category_id);
            $category->title = $this->name;
            $category->slug = $this->slug;
            $category->summary = $this->summary;
            $category->save();

        session()->flash('message','Category has been updated successfully!');
    }

    public function render()
    {
        $categories = Categories::all();
        return view('livewire.admin.admin-edit-category-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
