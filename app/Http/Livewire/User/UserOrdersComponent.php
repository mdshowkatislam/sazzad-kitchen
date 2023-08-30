<?php

namespace App\Http\Livewire\User;

use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserOrdersComponent extends Component
{
    public function render()
    {
        $orders = order::where('user_id', Auth::user()->id)->paginate(12);

        return view('livewire.user.user-orders-component',['orders'=>$orders])->layout('layouts.base');
    }
}
