<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
           [
            'name'=>'Md showkat islam',
            'email'=>'showkattuhin88766@gmail.com',
            'phone'=>'01534770999',
            'comment'=>'A professional Website dev',
           ],    
           [
            'name'=>'tuhin',
            'email'=>'tuhin@gmail.com',
            'phone'=>'01643180062',
            'comment'=>'An Android dev',
           ], 
           [
            'name'=>'Md. Sazzadul Islam',
            'email'=>'sajjad419@yahoo.com',
            'phone'=>'01758716419',
            'comment'=>'A professional Frontend developer',
           ] 

      ]);
    }
}