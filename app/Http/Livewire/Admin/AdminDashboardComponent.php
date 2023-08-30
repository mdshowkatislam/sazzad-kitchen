<?php

namespace App\Http\Livewire\Admin;

use App\Models\order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalSales = order::where('status', 'delivered')->count();
        $totalRevenue = order::where('status', 'delivered')->sum('total');
        $todaySales = order::where('status', 'delivered')->whereDate('created_at', Carbon::today())->count();        
        $todayRevenue = order::where('status', 'delivered')->whereDate('created_at', Carbon::today())->sum('total');
        return view('livewire.admin.admin-dashboard-component', [
            'orders' => $orders, 
            'totalSales' => $totalSales,
            'totalRevenue' => $totalRevenue,
            'todaySales' => $todaySales,
            'todayRevenue' => $todayRevenue
        ])->layout('layouts.base');
    }
}