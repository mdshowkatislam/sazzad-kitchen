<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
			  'title'=>'footer-settings',
              'description'=>'When it comes to talking about online grocery, you cannot
               but mention    cumillastore.com. As being the kick-starter,
               cumillastore.com is now one of the most popular online groceries
               of Bangladesh. The site is quite user-friendly, so it has managed
               to attract proper attention from the online customers.

			  Currently, you can get free delivery if your order is over 200 Tk.
               Other than that, cumillastore regularly offers sales promotional
               offers with exciting discounts. You can easily avail these offers
                in ‘Exclusive Offers’ section. You can by default get a 3% discount on your first purchase!',

              'short_des'=>'cumilla.com is an online shop available in cumilla
              district,bangladesh. We believe time is valuable to our fellow residents,
               and that they should not have to waste hours in traffic, brave bad weather
                and wait in line just to buy basic necessities like eggs!
                This is why Chaldal delivers everything you need right at
                 your door-step and at no additional cost.',

              'logo'=>'/frontend/logo/logo-5.png',
              'photo'=>'/frontend/logo/logo-2.png',
              'address'=>'tashin-store,golmarket,housing-state-shool-road,2nd     muradpur,cumilla.',
              'phone'=>'01534770999',
              'email'=>'showkattuhin88766@gmail.com',




        ]);
    }
}
