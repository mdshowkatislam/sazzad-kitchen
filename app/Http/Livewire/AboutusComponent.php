<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\banners;
use App\Models\aboutCompanyinfo;


class AboutusComponent extends Component
{
    public function render()
    {
        $banner=banners::where('group', 'company')->get();
        $info1=aboutCompanyinfo::first();
        $info2=aboutCompanyinfo::skip(1)->first();




        return view('livewire.aboutus-component', [
                    'banner'=>$banner,
                    'info1'=>$info1,
                    'info2'=>$info2

         ])->layout('layouts.base');
    }
}
