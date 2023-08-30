<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([

            'user_id'=>1,

            'discount'=>10.00,
            'tax'=>'20.00',
            'total'=>100,
            'firstname'=>'tuhin',
            'lastname'=>'islam',
            'mobile'=>'01534770999',
            'email'=>'tuhin@gmail.com',
            'line1'=>'husing',
            'line2'=>'muradpur',
            'city'=>'cumilla',
            'province'=>'cumilla',
            'country'=>'bangladesh',
            'zipcode'=>'3500',
            'status'=>'ordered',
            'is_shipping_different'=>0,
            


            
        ]);
    }
}
