<?php

namespace Database\Seeders;

use App\Models\setting;
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
        DB::table('setting')->insert([


            'description'=>'from description',
            'short_des'=>'from Short description',
            'logo'=>'/frontend/logo/logo-5.png',
            'photo'=>'/frontend/logo/logo-2.png',
            'address'=>'tashin-store,golmarket,housing-state-shool-road,2nd muradpur,cumilla.',
            'phone'=>'01534770999',

            'phone2'=>'01634180062',
            'email'=>'showkattuhin88766@gmail.com',
            'map'=>'www.googlemap.com',
            'twiter'=>'www.twiter.com',
            'facebook'=>'www.facebook.com',
            'pinterest'=>'www.pinterest.com',
            'instagram'=>'www.instagram.com',
            'youtube'=>'www.youtube.com'

      ]);
    }

}