<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->insert([
         [ 'code'=>'abc1',
          'type'=>'fixed',
          'value'=>20.00,
          'cart_value'=>20.00,
          'status'=>'active'
        ], 
        [ 'code'=>'abc2',
        'type'=>'percent',
        'value'=>50.00,
        'cart_value'=>50.00,
        'status'=>'active'
      ],
       [ 'code'=>'abc3',
      'type'=>'percent',
      'value'=>100.00,
      'cart_value'=>100.00,
      'status'=>'active'
    ]
           
      

      ]);
    }
}