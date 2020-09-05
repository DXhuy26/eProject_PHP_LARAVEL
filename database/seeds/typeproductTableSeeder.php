<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert([
            'name' => 'GUITAR ACOUSTIC',
            'imgBanner' => 'acoustic-1.jpg'
        ]);
        DB::table('type_products')->insert([
            'name' => 'GUITAR CLASSIC',
            'imgBanner' => 'classic-1.jpg'
        ]);
        DB::table('type_products')->insert([
            'name' => 'GUITAR ELECTRIC',
            'imgBanner' => 'electric-1.jpg'
        ]);
        DB::table('type_products')->insert([
            'name' => 'GUITAR BASS',
            'imgBanner' => 'bass-1.jpg'
        ]);
        DB::table('type_products')->insert([
            'name' => 'ĐÀN UKULELE',
            'imgBanner' => 'ukulele-1.jpg'
        ]);
    }
}
