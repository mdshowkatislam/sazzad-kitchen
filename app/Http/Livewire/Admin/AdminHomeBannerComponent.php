<?php

namespace App\Http\Livewire\Admin;

use App\Models\banners;
use Livewire\Component;

class AdminHomeBannerComponent extends Component
{
    public function deleteSlide($slide_id)
    {
        $slider = banners::find($slide_id);
        $slider->delete();
        session()->flash('message','Slider has been deleted successfully!');
    }

    public function render()
    {
        $sliders = banners::all();
        return view('livewire.admin.admin-home-banner-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
