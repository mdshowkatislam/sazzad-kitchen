<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupons;
use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public function deleteCoupon($coupon_id)
    {
        $coupon = Coupons::find($coupon_id);
        $coupon->delete();
        session()->flash('message','Coupon has been deleted successfully!');
    }

    public function render()
    {
        $coupons = Coupons::all();
        return view('livewire.admin.admin-coupons-component', ['coupons'=>$coupons])->layout('layouts.base');
    }
}
