<?php

namespace App\Http\Livewire\User;

use App\Models\order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders = order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        $totalCost = order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->sum('total');
        $totalPurchase = order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        $totalDelivered = order::where('status', 'delivered')->where('user_id', Auth::user()->id)->count();
        $totalCanceled = order::where('status', 'canceled')->where('user_id', Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component', [
            'orders'=>$orders,
            'totalCost'=>$totalCost,
            'totalPurchase' => $totalPurchase,
            'totalDelivered' =>$totalDelivered,
            'totalCanceled' => $totalCanceled ])->layout('layouts.base');
    }
}