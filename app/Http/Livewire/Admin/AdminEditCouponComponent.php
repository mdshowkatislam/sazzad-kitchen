<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupons;
use Livewire\Component;
use PHPUnit\Framework\Constraint\Count;

class AdminEditCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public $expiry_date;
    public $status;

    public function mount($coupon_id)
    {
        $coupon = Coupons::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->id;
        $this->expiry_date = $coupon->expiry_date;
        $this->status = $coupon->status;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',

        ]);
    }

    public function updateCoupon()
    {
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',


        ]);
        $coupon = Coupons::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->status = $this->status;
        $coupon->save();
        session()->flash('edit_message','Coupon has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.base');
    }
}
