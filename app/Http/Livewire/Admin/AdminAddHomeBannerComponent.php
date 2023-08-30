<?php

namespace App\Http\Livewire\Admin;

use App\Models\banners;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $group;

    public function mount()
    {
        $this->status = 0;

    }

    public function addSlide()
    {
        $slider = new banners();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imagename = $this->image->getClientOriginalName();



        $this->image->storeAs('images/MainSliders',$imagename);
        $slider->image = $imagename;
        $slider->status = $this->status;
        $slider->group = $this->group;
        $slider->save();
        session()->flash('message','Slide has been Created Successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-banner-component')->layout('layouts.base');
    }
}
