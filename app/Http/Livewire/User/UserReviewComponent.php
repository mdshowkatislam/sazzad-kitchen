<?php

namespace App\Http\Livewire\User;

use App\Models\order_items;
use App\Models\order;
use App\Models\reviews;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $user_id;
    public $product_id;
    protected $rate;
    protected $comment;
    public $status;
    public $order_items_id;



    public function mount($order_items_id)
    {
        $this->$order_items_id = $order_items_id;
        $orderItem = order_items::find($this->order_items_id);
        $this->user_id=$orderItem->order->user_id;
        $this->product_id=$orderItem->product_id ;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rate' => 'required',
            'comment' => 'required',
        ]);
    }

    public function addReview()
    {
        $this->validate([
            'rate' => 'required',
            'comment' => 'required',
        ]);
        $review = new reviews();
        $review->user_id = $this->user_id;
        $review->product_id = $this->product_id;
        $review->rate = $this->rate;
        $review->comment = $this->comment;
        $review->status = $this->status;
        $review->order_items_id = $this->order_items_id;
        $review->save();

        $orderItem = order_items::find($this->order_items_id);
        $orderItem->rstatus = true;
        $orderItem->save();
        session()->flash('message','Your review has been added successfully!');

    }

    public function render()
    {
        $orderItem = order_items::find($this->order_items_id);

        // dd($this->order_items_id);
        return view('livewire.user.user-review-component',['orderItem'=>$orderItem])->layout('layouts.base');
    }
}
