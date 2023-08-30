<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\banners;
use App\Models\aboutDevinfo;

class AboutdevComponent extends Component
{
    public function render()
    {
        $banner=banners::where('group', 'software')->get();
        $info1=aboutDevinfo::first();
        $info2=aboutDevinfo::skip(1)->first();
        $info3=aboutDevinfo::skip(2)->first();



        return view('livewire.aboutdev-component',
        [
            'banner'=>$banner,
            'info1'=>$info1,
            'info2'=>$info2,
            'info3'=>$info3

 ]

        )->layout('layouts.base');
    }
}
