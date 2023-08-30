<?php

namespace App\Http\Livewire\Admin;

use App\Models\contacts;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function render()
    {
        $contacts = contacts::paginate(10);
        return view('livewire.admin.admin-contact-component', ['contacts'=>$contacts])->layout('layouts.base');
    }
}
