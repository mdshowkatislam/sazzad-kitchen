<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    // public function subscribe(){
    //     return view('frontend.newsletter');
    // }
    public function aboutus(){
        return view('contact-us');
    }
    public function contact(){
        return view('footer');
    }

}
