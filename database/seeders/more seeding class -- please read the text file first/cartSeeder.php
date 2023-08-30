<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class cartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoppingcart')->insert([
              'product_id'=>1,
              'name'=>'Oppo Mobile',
              'image'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
              'user_id'=>1,
              'price'=> 300.00,
              'status'=>'in-stock',
              'quantity'=> 1,
              'amount'=> 300,


        ]);
    }
}
