<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutCompanyinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('about_companyinfos')->insert(

          [   [
                 'image'=>'about food-1.jpg',
                 'title1'=>'welcome',
                 'title2'=>'to sazzad kitchen',
                 'doc'=>'Welcome to sazzad kitchen! We serve a variety of dishes made with freshly item and seasonal home made specialties cooked with local ingredients.We guaranty the best village test.Some of them you never tested before in such a way.We think about your setisfaction because this is our passion not profession.',
                 'conclusion'=>'Just order with clear explanation and we will make you happay definatly.We promise.'
             ],
             [
             'image'=>'about food-2.jpg',
             'title1'=>'We offer you',
             'title2'=>'the best service',
             'doc'=>'Welcome to sazzad kitchen! We serve a variety of dishes made with freshly item and seasonal home made specialties cooked with local ingredients.We guaranty the best village test.Some of them you never tested before in such a way.We think about your setisfaction because this is our passion not profession. Just order with clear explanation and we will make you happay definatly.We promise.',
             'conclusion'=>'Do not worry about the amount, just order, we will fix all and 100% you will satisfy.'

             ]

          ]
          );
    }
}
