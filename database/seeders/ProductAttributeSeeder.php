<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('product_attributes')->insert([

         [ 'name'=>'jack',
            'created_at'=>time()
        ],
         [ 'name'=>'andrea',
            'created_at'=>time()
        ],
         [ 'name'=>'nil',
            'created_at'=>time()
        ],
         [ 'name'=>'stive ostin',
            'created_at'=>time()
        ]


          ]);
    }
}
