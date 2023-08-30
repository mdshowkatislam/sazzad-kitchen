<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(home_categorySeeder::class);
        $this->call(userSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(bannerSeeder::class);
        
        $this->call(settingSeeder::class);
        $this->call(settingsSeeder::class);
        $this->call(SubcategoriesSeeder::class);
        
      
      
        $this->call(categorySeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(cartSeeder::class);
      


        $this->call(OrderItemsSeeder::class);
        $this->call(ReviewsSeeder::class);
        $this->call(SalesSeeder::class);
       
      
       
     
      
    }
}