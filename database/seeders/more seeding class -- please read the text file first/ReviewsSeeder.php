<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id'=>5,
            'product_id'=>1,
            'rate'=>3,
            'review'=>'good',
            'status'=>'active',
              'order_items_id'=>1

        ]);
    }
}
