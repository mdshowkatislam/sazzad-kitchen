<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder {
	public function run() {
		 DB::table('products') -> insert([
	[
	'name'        => 'gorur biriani',
	'quantity'    => 'full plate',
	'price'       => 180,
	'category'    => 'Beef',
	'short_desc'=>'Special biriani test.Nice flavour.Try once',
	'des'      => 'Cooked with polawr chaul with beef and some hand made masala.No any aditional spices mixed',
	'aditional_desc'=>'If you try once, you will try more. 100% pure biriani test within lowest price.',
	'gallery'   => 'images/products/gorur biriani.jpg',
	'file_path' => 'images/products/',
	'image' => 'gorur biriani.jpg',
	'images' => '',
    'condition'=>'top-selling',

	'discount'  => 0.00,
	'categories_id'    => 1,


	],
    [
        'name'        => 'gorur-mangsho-alu',
        'quantity'    => 'for 2 person( 8 Pieces  beef)',
        'price'       => 150 ,
        'category'    => 'Beef',
        'short_desc'=>'4 Pieces  of beef and 4 Pieces  of potato.Village test.With double order we will serve you salad(special)',
        'des'      => 'No additional spicy added except beef curry',
        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.Feel like home',
        'gallery'   => 'images/products/gorur-mangsho-alu.jpg',
        'file_path' => 'images/products/',
        'image' => 'gorur-mangsho-alu.jpg',
        'images' => '',
        'condition'=>'top-selling',

        'discount'  => 0.00,
        'categories_id'    => 1,


        ],
        [
            'name'        => 'goru-vuna-spicy',
            'quantity'    => '1 bowl 6 pices',
            'price'       => 100 ,
            'category'    => 'Beef',
            'short_desc'=>'6 pices of Beef.Little bit spicy.Simple village test.',
            'des'      => 'Vuna mangsho(beef).fresh beef. After your order we will prepare all and will serve hot.',
            'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
            'gallery'   => 'images/products/goru-vuna-spicy.jpg',
            'file_path' => 'images/products/',
            'image' => 'goru-vuna-spicy.jpg',
            'images' => '',
            'condition'=>'top-selling',


            'discount'  => 0.00,
            'categories_id'    => 1,


            ],
            [
                'name'        => 'murgi-alu',
                'quantity'    => '1 large bowl.(4 pices)',
                'price'       => 180 ,
                'category'    => 'Chicken',
                'short_desc'   =>'4 chicken pices with potetos.Real village test.',
                'des'          => 'You can eat with rice or even with ruti. So delicious.( If you try once,100% you will used to order it more.',
                'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                'gallery'   => 'images/products/murgi-alu.jpg',
                'file_path' => 'images/products/',
                'image' => 'murgi-alu.jpg',
                'images' => '',
                'condition'=>'top-selling',

                'discount'  => 0.00,
                'categories_id'    => 2,


                ],
                [
                    'name'        => 'murgi-biriani',
                    'quantity'    => '1 large bowl',
                    'price'       =>  140 ,
                    'category'    => 'Chicken',
                    'short_desc'=>'It could be your one of the best biriani.Simple and cheap( After order you will understand).',
                    'des'      => 'Good quality rice with small sized chicken pices( even you can change your test by explaining, when you order.',
                    'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                    'gallery'   => 'images/products/murgi-biriani-1.jpg',
                    'file_path' => 'images/products/',
                    'image' => 'murgi-biriani-1.jpg',
                    'images' => '',
                    'condition'=>'top-selling',
                    'discount'  => 0.00,
                    'categories_id'    => 2,


                    ],
                    [
                        'name'        => 'murgi-rost(Broiler)',
                        'quantity'    => '3 large pices(for 3 person)',
                        'price'       =>220 ,
                        'category'    => 'Chicken',
                        'short_desc'=>' Broiler Chicken.Light Uniqe test with proper broth(jhol)',
                        'des'      => 'Enough to serve 3 persion.The broth(jhol) will test so delicious.',
                        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                        'gallery'   => 'images/products/murgi-rost(Broiler).jpg',
                        'file_path' => 'images/products/',
                        'image' => 'murgi-rost(Broiler).jpg',
                        'images' => '',
                        'condition'=>'special',

                        'discount'  => 0.00,
                        'categories_id'    => 2,


                        ],
                        [
                            'name'        => 'murgi-vuna(Broiler)',
                            'quantity'    => '1 bowl(3 pices)',
                            'price'       =>120 ,
                            'category'    => 'Chicken',
                            'short_desc'=>'3 Chicken pices.If there have no any leg pices then you will get 4 pices.',
                            'des'      => 'We means custores seticfaction.If by any means you feel unseticfied then, tell us and we will make you happy.',
                            'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                            'gallery'   => 'images/products/murgi-vuna.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'murgi-vuna.jpg',
                            'images' => '',

                            'condition'=>'special',
                            'discount'  => 0.00,
                            'categories_id'    => 2,


                            ],
                            [
                                'name'        => 'murgi buter dal',
                                'quantity'    => '1 bowl(3 pices)',
                                'price'       =>100 ,
                                'category'    => 'Chicken',
                                'short_desc'=>'3 Chicken pices.If there have no any leg pices then you will get 4 pices.',
                                'des'      => 'We means custores seticfaction.If by any means you feel unseticfied then, tell us and we will make you happy.',
                                'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                                'gallery'   => 'images/products/murgi buter dal-1.jpg',
                                'file_path' => 'images/products/',
                                'image' => 'murgi buter dal-1.jpg',
                                'images' => 'murgi buter dal-2.jpg,murgi buter dal-3.jpg,',

                                'condition'=>'special',
                                'discount'  => 0.00,
                                'categories_id'    => 2,


                                ],


                            [
                                'name'        => 'shonali-murgi-vuna',
                                'quantity'    => '3 pices(large',
                                'price'       => 300 ,
                                'category'    => 'Chicken',
                                 'short_desc'=>'midium sized chicken(shonali). Uniqe test with medium broth(jhol)',
                                'des'      => '',
                                'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                                'gallery'   => 'images/products/shonali-murgi-vuna.jpg',
                                'file_path' => 'images/products/',
                                'image' => 'shonali-murgi-vuna.jpg',
                                'images' => '',
                                'condition'=>'top-selling',
                                'discount'  => 0.00,
                                'categories_id'    => 2,


                                ],
 [
        'name'        => 'lacca-shemai(hard)',
        'quantity'    => '1 large bowl',
        'price'       =>  140,
        'category'    => 'Dessert(sweets)',
        'short_desc'=>'Lacca shemai with pure milk,butter,kismis,nuts and some others.But its hard, means(not such liquidy type).You can cut through by spoon lick soft cake.',
        'des'      => 'Very yammi and delicious test.But Very simple.The main thing is, this is made of some pure produces.',
        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
        'gallery'   => 'images/products/lacca-hard.jpg',
        'file_path' => 'images/products/',
        'image' => 'lacca-hard.jpg',
        'images' => '',
        'condition'=>'special',
        'discount'  => 0.00,
        'categories_id'    => 3,


        ],
        [
            'name'        => 'lacca-shemai(soft)',
            'quantity'    => '1 large bowl',
            'price'       =>  110,
            'category'    => 'Dessert(sweets)',
            'short_desc'=>'Lacca shemai with pure milk,butter,kismis,nuts and some others.But its soft, means little bit liquidy.',
            'des'      => 'Very yammi and delicious test.But Very simple.The main thing is, this is made of some pure produces.',
            'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
            'gallery'   => 'images/products/lacca-soft.jpg',
            'file_path' => 'images/products/',
            'image' => 'lacca-soft.jpg',
            'images' => '',
            'condition'=>'popular',

            'discount'  => 0.00,
            'categories_id'    => 3,


            ],
            [
                'name'        => 'pakistany-shemai(browne color)',
                'quantity'    => '1 large bowl',
                'price'       =>  80,
                'category'    => 'Dessert(sweets)',
                'short_desc'=>'pakistany shemai called nurari shemi, with pure milk,butter,kismis,nuts and some others.But its soft, means little bit liquidy.',
                'des'      => 'Very yammi and delicious test.But Very simple.The main thing is, this is made of some pure produces.',
                'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                'gallery'   => 'images/products/pakistany.jpg',
                'file_path' => 'images/products/',
                'image' => 'pakistany.jpg',
                'images' => '',
                'condition'=>'top-selling',
                'discount'  => 0.00,
                'categories_id'    => 3,


                ],

                    [
                        'name'        => 'dim vuna',
                        'quantity'    => '5 pices',
                        'price'       => 150,
                        'category'    => 'Egg(Dim)',
                        'short_desc'=>'So delicious.Very Simple.Only dim vuna.Try once',
                        'des'      => 'Best for rice.Dimer jhol ta so nice.100% deshi test',
                        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                        'gallery'   => 'images/products/dim vuna.jpg',
                        'file_path' => 'images/products/',
                        'image' => 'dim vuna.jpg',
                        'images' => '',
                        'condition'=>'special',

                        'discount'  => 0.00,
                        'categories_id'    => 4,


                        ],
                        [
                            'name'        => 'dim-biriani',
                            'quantity'    => '2 plate full',
                            'price'       => 200,
                            'category'    => 'Egg(Dim)',
                            'short_desc'=>'Dim with rice(polao) and mug dal(lentil) and biriani masala(home made).Little spicy.',
                            'des'      => 'With double plate(4 plate) we will serve nice salad(saucy)',
                            'aditional_desc'=>'100% delicious. Unique test.',
                            'gallery'   => 'images/products/dim-biriani.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'dim-biriani.jpg',
                            'images' => 'dim biriani-2.jpg',
                            'condition'=>'popular',
                            'discount'  => 0.00,
                            'categories_id'    => 4,


                            ],
                            [
                                'name'        => 'dim-khichuri',
                                'quantity'    => '2 plate(full)',
                                'price'       => 170,
                                'category'    => 'Egg(Dim)',
                                'short_desc'=>'Dim with rice(boiled) and dal(mushor).So spicy and yammi.',
                                'des'      => 'With double plate(4 plate) we will serve nice salad(raw)',
                                'aditional_desc'=>'100% delicious. Unique test.The image is the only the item outlooks not the adject quntity.We will adjust nicely for your the amount(you will happy).',
                                'gallery'   => 'images/products/dim-khichuri.jpg',
                                'file_path' => 'images/products/',
                                'image' => 'dim-khichuri.jpg',
                                'images' => '',
                                'condition'=>'popular',
                                'discount'  => 0.00,
                                'categories_id'    => 4,


                                ],
                                [
                                    'name'        => 'Cake',
                                    'quantity'    => '1 big(2.5 pound)(for full family)',
                                    'price'       => 200,
                                    'category'    => 'Nodules-Soup-Cakes',
                                    'short_desc'=>'Simple,fresh,new. Good for snacks(nasta).',
                                    'des'      => 'Made with flour, eggs only.Very normal.Can not stop eating. ',
                                    'aditional_desc'=>'If it is simple so, why you will order. Because it is cheap and fresh. We will start making,after your order.',
                                    'gallery'   => 'images/products/cake.jpg',
                                    'file_path' => 'images/products/',
                                    'image' => 'cake.jpg',
                                    'images' => '',
                                    'condition'=>'special',
                                    'discount'  => 0.00,
                                    'categories_id'    => 5,


                                    ],
                                    [
                                        'name'        => 'Magy nodules',
                                        'quantity'    => '1 big bowl(for 2 person)',
                                        'price'       =>120 ,
                                        'category'    => 'Nodules-Soup-Cakes',
                                        'short_desc'=>'So delicious and Unique.100% pure test and so spicy',
                                        'des'      => 'Mixed with vegetable and eggs and chicken fleck(gura)',
                                        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                                        'gallery'   => 'images/products/magy nodules.jpg',
                                        'file_path' => 'images/products/',
                                        'image' => 'magy nodules.jpg',
                                        'images' => '',
                                        'condition'=>'popular',
                                        'discount'  => 0.00,
                                        'categories_id'    => 5,


                                        ],
 [
        'name'        => 'Noduls',
        'quantity'    => '1 big bowl(for 2 person)',
        'price'       => 100 ,
        'category'    => 'Nodules-Soup-Cakes',
        'short_desc'=>'So delicious and Unique.100% pure test and so spicy',
        'des'      => 'Mixed with vegetable and eggs and chicken fleck(gura)',
        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
        'gallery'   => 'images/products/nodules.jpg',
        'file_path' => 'images/products/',
        'image' => 'nodules.jpg',
        'images' => '',
        'condition'=>'special',
        'discount'  => 0.00,
        'categories_id'    => 5,


        ],
        [
            'name'        => 'Soup',
            'quantity'    => '1 big bowl(for 2 person)',
            'price'       => 100,
            'category'    => 'Nodules-Soup-Cakes',
            'short_desc'=>'So delicious and Unique.100% pure test and so spicy.',
            'des'      => 'Made with verious vegetable and egg and chicken fleck(gura),corn flour,soya sauce and also with soup spicy',
            'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
            'gallery'   => 'images/products/soup.jpg',
            'file_path' => 'images/products/',
            'image' => 'soup.jpg',
            'images' => '',
            'condition'=>'default',
            'discount'  => 0.00,
            'categories_id'    => 5,


            ],
            [
                'name'        => 'chicken fry',
                'quantity'    => 'for 3 person(big-9 pices)',
                'price'       => 315,
                'category'    => 'Special items',
                'short_desc'=>'So delicious and Unique.100% greek test and light spicy.',
                'des'      => 'Chicken fry with Monessen(greek style). Just try once and you will made.',
                'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                'gallery'   => 'images/products/chicken fry.jpg',
                'file_path' => 'images/products/',
                'image' => 'chicken fry.jpg',
                'images' => '',

                'condition'=>'default',
                'discount'  => 0.00,
                'categories_id'    => 6,


                ],
                [
                    'name'        => 'Shatkorar murgi ranna',
                    'quantity'    => 'for 3 person(9 pices)',
                    'price'       => 250,
                    'category'    => 'Special items',
                    'short_desc'=>'Unbelivable Uniqe test of sylhet. ',
                    'des'      => 'Shatkora(sylhety food) with chicken.',
                    'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.',
                    'gallery'   => 'images/products/Shatkorar murgi ranna.jpg',
                    'file_path' => 'images/products/',
                    'image' => 'Shatkorar murgi ranna.jpg',
                    'images' => 'shat kora-2.jpg,shat kora-3.jpg',

                    'condition'=>'special',
                    'discount'  => 0.00,
                    'categories_id'    => 6,


                    ],
                    [
                        'name'        => 'Shatkorar dal',
                        'quantity'    => 'for 3 person(1 bowl)',
                        'price'       => 100,
                        'category'    => 'Special items',
                        'short_desc'=>'Unbelivable Uniqe test of sylhet. ',
                        'des'      => 'Shatkora(sylhety food) with dal(lentil).',
                        'aditional_desc'=>'If you try once, you will try more. 100% pure test within lowest price.Money back guaranty.Don\' worry about the amount.we will fix the quantity andy you will 100% satisfy.',
                        'gallery'   => 'images/products/shatkorar-dal.jpg',
                        'file_path' => 'images/products/',
                        'image' => 'shatkorar-dal.jpg',
                        'images' => 'shat kora-2.jpg,shat kora-3.jpg',
                        'condition'=>'special',

                        'discount'  => 0.00,
                        'categories_id'    => 6,


                        ],
                        [
                            'name'        => 'shutki-vuna',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>120 ,
                            'category'    => 'Special items',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh loitta shutki(dry fish) and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/shutki-vuna.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'shutki-vuna.jpg',
                            'images' => 'loitta shutki vuna-2.jpg,loitta shutki vuna-3.jpg,loitta shutki vuna-4.jpg',
                            'condition'=>'specail',
                            'discount'  => 0.00,
                            'categories_id'    => 6,


                        ],
                    [
                        'name'        => 'shidol-vorta',
                        'quantity'    => '1 small bowl(for 4 person)',
                        'price'       => 100,
                        'category'    => 'Vorta',
                        'short_desc'=>'Very testy and fresh and hot.',
                        'des'      => 'Made of fresh shidol shutki(dry fish) and Its will really so hot',
                        'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                        'gallery'   => 'images/products/shidol-vorta.jpg',
                        'file_path' => 'images/products/',
                        'image' => 'shidol-vorta3.jpg',
                        'images' => 'shidol-vorta1.jpg,shidol-vorta2.jpg',
                         'condition'=>'special',


                        'discount'  => 0.00,
                        'categories_id'    => 7,


                        ],

                        [
                            'name'        => 'man kochu vorta',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>80 ,
                            'category'    => 'Vorta',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh man kochu root and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/man kochu vorta-1.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'man kochu vorta-1.jpg',
                            'images' => 'man kochu vorta-2.jpg,man kochu vorta-3.jpg',
                            'condition'=>'special',
                            'discount'  => 0.00,
                            'categories_id'    => 7,


                        ],
                        [
                            'name'        => 'sim vorta',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>70 ,
                            'category'    => 'Vorta',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh mukhi(chora) and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/sim vorta-1.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'sim vorta-1.jpg',
                            'images' => 'sim vorta-2.jpg,sim vorta-3.jpg',
                            'condition'=>'',
                            'discount'  => 0.00,
                            'categories_id'    => 7,


                        ],
                        [
                            'name'        => 'kochur mukhi',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>70 ,
                            'category'    => 'Vorta',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh mukhi(chora) and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/kochur mukhi-1.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'kochur mukhi-1.jpg',
                            'images' => 'kochur mukhi-3.jpg',
                            'condition'=>'special',
                            'discount'  => 0.00,
                            'categories_id'    => 7,


                        ],
                        [
                            'name'        => 'Lalshak vaji',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>100 ,
                            'category'    => 'Shak(spinach)',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh loitta shutki(dry fish) and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/shutki-vuna.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'lalshak vaji-1.jpg',
                            'images' => 'lalshak vaji-2.jpg',
                            'condition'=>'popular',
                            'discount'  => 0.00,
                            'categories_id'    => 8,


                        ],
                        [
                            'name'        => 'kolmi shak vaji',
                            'quantity'    => '1 medium bowl(for 3 person)',
                            'price'       =>100 ,
                            'category'    => 'Shak(spinach)',
                            'short_desc'=>'Very testy and fresh and hot.',
                            'des'      => 'Made of fresh loitta shutki(dry fish) and Its will be medium hot',
                            'aditional_desc'=>'Don\'t worry about the amount, just order, we will fix all and 100% you will satisfy.',
                            'gallery'   => 'images/products/kolmi shak vaji-1.jpg',
                            'file_path' => 'images/products/',
                            'image' => 'kolmi shak vaji-1.jpg',
                            'images' => 'kolmi shak vaji-2.jpg,kolmi shak vaji-3.jpg',
                            'condition'=>'popular',
                            'discount'  => 0.00,
                            'categories_id'    => 8,


                        ],



	]);
	}
	}
