<?php

namespace App\Http\Livewire\User;

use App\Models\order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


class UserOrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function cancelOrder()
        {

        $order = order::find($this->order_id);
        $order->status = "canceled";
            $order->canceled_date = DB::raw('CURRENT_DATE');
        $order->save();
        session()->flash('order_message','Order has been canceled!');
    }




    public function render()
    {
        $order = order::where('user_id', Auth::user()->id)->where('id',$this->order_id)->first();


        return view('livewire.user.user-order-details-component',['order'=>$order])->layout('layouts.base');
    }


}
