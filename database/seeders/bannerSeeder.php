<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
     [
        [
            'title'=>'sazzad kitchen',
            'subtitle'=>'100% mind blowing test',
            'price'=>'affortable ',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-1.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'sazzad kitchen',
            'subtitle'=>'100% Fresh new test',
            'price'=>'lowext delivery cost',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-2.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'Murgi vuna',
            'subtitle'=>'100% different test',
            'price'=>'70 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-3.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'gorur mangsher birani',
            'subtitle'=>'simple old test',
            'price'=>'100 tk ',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-4.png',
            'status'=>1,

            'group'=>'main'
        ],

        [
            'title'=>'gorur mangsher carri ',
            'subtitle'=>'old village test',
            'price'=>'120 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-5.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'chicken fried rich(special)',
            'subtitle'=>'western test',
            'price'=>'120 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-6.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'vegetable khicuri',
            'subtitle'=>'simple but different test',
            'price'=>'60 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-7.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'Chicken (shonali)(big sized)',
            'subtitle'=>'100% special test',
            'price'=>'120 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-8.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'Goru Vuna(offer)',
            'subtitle'=>'Village Test',
            'price'=>'80 tk',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-9.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'sazzad kitchen',
            'subtitle'=>'',
            'price'=>'',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-10.png',
            'status'=>1,

            'group'=>'main'
        ],
        [
            'title'=>'cumilla web',
            'subtitle'=>'We not only build but also care your website.',
            'price'=>'Don\'t think about pricing.',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-11.png',
            'status'=>1,

            'group'=>'software'
        ],
        [
            'title'=>'cumilla web',
            'subtitle'=>'Simple,just your need and quick.',
            'price'=>'In your budget',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-12.png',
            'status'=>1,

            'group'=>'software'
        ],
        [
            'title'=>'sazzad kitchen',
            'subtitle'=>'Village test',
            'price'=>'lowest price',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-13.png',
            'status'=>1,

            'group'=>'company'
        ],
        [
            'title'=>'sazzad kitchen',
            'subtitle'=>'Unique and delicious',
            'price'=>'Do not thing about pricing.100% cheap',
            'link'=>'http://localhost:8000/images/MainSliders',
            'image'=>'sld-14.png',
            'status'=>1,

            'group'=>'company'
        ],


    ]


    );
    }
}
