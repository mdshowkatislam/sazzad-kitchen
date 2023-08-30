<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    public function run()
    {
        $data=array(
            array(
                'title'=>'Beef',
                'slug'=>'beef',

                'summary'=>'All beef(gorur mangsher) items are given here'


                 ),
                 array(
                    'title'=>'Chicken',
                    'slug'=>'chicken',

                    'summary'=>'All chicken items are given here.They all are common and really delicious.Some of them specials tool.'

                   ),
                 array(
                  'title'=>'Dessert(sweets)',
                  'slug'=>'dessert(sweets)',

                  'summary'=>'All sweets(after dinner or lunch) are given here'


                   ),
                   array(
                    'title'=>'Egg(dim)',
                    'slug'=>'egg(dim)',

                    'summary'=>'Special egg items for dinner or lunch'

                     ),
                     array(
                        'title'=>'Nodules-Soup-Cakes',
                        'slug'=>'nodules-soup-cakes',

                        'summary'=>'Simple home made nodules,soup and cake items.'


                         ),


                     array(
                      'title'=>'Special items',
                      'slug'=>'special_items',

                      'summary'=>'Some very special item foods are given here.These are very nice and so delicious items to check'

                       ),
                       array(
                        'title'=>'Vorta',
                        'slug'=>'vorta',

                        'summary'=>'These are some kind of treditional hand made items and for those who are well known of these items.Some of them are unique.Try once for new test.'


                       ),

                       array(
                        'title'=>'Shak(spinach)',
                        'slug'=>'shak(spinach)',

                        'summary'=>'These are some kind of treditional hand made items and for those who are well known of these items.Some of them are unique.Try once for new test.'


                         )





     );

     DB::table('categories')->insert($data);
  }

    }
