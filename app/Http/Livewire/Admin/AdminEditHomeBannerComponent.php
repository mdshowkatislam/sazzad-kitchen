<?php

namespace App\Http\Livewire\Admin;

use App\Models\banners;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditHomeBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;
    public $group;

    public function mount($slide_id)
    {
        $slider = banners::find($slide_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
        $this->group = $slider->group;

    }

    public function updateSlide()
    {
        $slider = banners::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle  = $this->subtitle ;
        $slider->price = $this->price;
        $slider->link = $this->link;
        if($this->newimage)
        {
            if(file_exists(public_path('images/MinSliders/'.$slider->image))){
                unlink('images/MainSliders'.'/'.$slider->image);
            }
    //         else{
    //             $imagename = $this->newimage->getClientOriginalName();
    //             $this->newimage->storeAs('images/MainSliders',$imagename);
    //
    //             $slider->image = $imagename;
    //
    //         }
            $imagename = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('images/MainSliders',$imagename);

            $slider->image = $imagename;

        }
        $slider->status = $this->status;
        $slider->group = $this->group;
        $slider->save();
        session()->flash('message','Slide has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-banner-component')->layout('layouts.base');
    }
}
