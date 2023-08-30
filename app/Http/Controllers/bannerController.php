<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banners;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class bannerController extends Controller
{
    public function bannerItem(){
        $banner=banners::where('status','active')->limit(3)->get();
        return view('livewire.banner',['banner'=>$banner]);


    }
}