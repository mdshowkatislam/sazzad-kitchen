<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutDevinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('about_devinfos')->insert([
        [
            'image'=>'about dev-1.jpg',
            'title1'=>'Welcom to our',
            'title2'=>'cumilla web',
            'doc'=>'Our job is more than just software design and development, our job is taking care of your success.
            If you are looking for a reliable, you are about to knock on the right door.
            ',
            'conclusion'=>'We maintain and ensure the quality of your
            eCommerce solution. This eCommerce solution leads to smooth compatibility across devices and platforms and satisfies your customers. The easy drag-and-drop interface helps you to concentrate on what matters most, your brand and your content.
            ',


            ],



            [
            'image'=>'about dev-2.jpg',
            'title1'=>'We are',
            'title2'=>'Simple and quick',
            'doc'=>'We just take time to understand your need, your requirements and your policy.After then we start work on prototype
            , then we make our demand and your benefits.
            ',
            'conclusion'=>'Vendors get the best UI experience with all functionalities. Interactive design, Usability, Visual design all of these components make your store look amazing.',


            ],
            [
             'image'=>'about dev-3.jpg',
             'title1'=>'We will support your',
             'title2'=>' 24 hour',

             'doc'=>'Multiple payment gateways can be your choice to grow your business because that is the fastest way to reach billions of consumers.
             We offer you multiple language-supported web solutions.
             That extends your customer experience among more people worldwide.',
             'conclusion'=>'You will be happy with work use.We always concern you that, what we are doing. ',

             ]
       ]);
    }
}
