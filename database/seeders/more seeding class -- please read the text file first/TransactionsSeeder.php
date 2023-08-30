<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'user_id'=>'1',
            'order_id'=>'1',
            'mode'=>'cod',
            'status'=>'pending',
            'created_at'=>'2022-04-18 16:47:10.000000',
             'updated_at'=>'2022-04-18 16:47:10.000000'

        ]);
    }
}
