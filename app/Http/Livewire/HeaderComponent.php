<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\setting;

class HeaderComponent extends Component
{
    public function render()
    {
        $setting=setting::find(1);
        return view('livewire.header-component')->with('setting',$setting);
    }
}
