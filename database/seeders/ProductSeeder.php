<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           
            [
            'name' => 'OPPO mobile',
            "price"=>"300",
            "description"=>"A smartphone with 8gb ram and much more features",
            "category"=>"mobile",
            "gallery"=>"https://www.sathya.in/Media/Default/Thumbs/0043/0043760-oppo-mobile-f17-pro-metallic-white-8gb-ram-128gb-storage.jpg",
            ],
            [
            'name'=>'Samsung TV',
            "price"=>"500",
            "description"=>"A smart Tv with  much more features",
            "category"=>"Tv",
            "gallery"=>"https://phonesdata.com/files/models/LG--W30-137.jpg",
            ],
            [
            'name'=>'LG mobile',
            "price"=>"500",
            "description"=>"A smart Tv with  much more features",
            "category"=>"TV",
            "gallery"=>"https://static.fnac-static.com/multimedia/Images/FR/NR/0a/85/78/7898378/1540-1/tsp20160510160604/TV-Sony-Bravia-KDL32WD750B-Full-HD-WiFi.jpg",
            ],
            [
            'name'=>'LG fridge',
            "price"=>"300",
            "description"=>"A fridge with much more features",
            "category"=>"fridge",
            "gallery"=>"https://spacenet.tn/45403-large_default/r%C3%A9frig%C3%A9rateur-lg-272-l-nofrost-silver-gn-b272sqcb.jpg",
            ]
            ]);   

    }
}
