<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'tuhin',
                'email'=>'tuhin@gmail.com',
                'email_verified_at'=>null,
                'password'=> Hash::make('9999'),
               
                'profile_photo_path'=>'assets/images/profile/t.png',
                'utype'=>'ADM'
            
          ],
  
          [
              'name'=>'polash',
              'email'=>'polash@gmail.com',
              'email_verified_at'=>null,
              'password'=> Hash::make('0000'),
            
              'profile_photo_path'=>'assets/images/profile/t.png',
              'utype'=>'USR'
          
        ],
                  

        ]);
    }
}