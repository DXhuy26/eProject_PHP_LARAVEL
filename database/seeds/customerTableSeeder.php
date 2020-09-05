<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => 'hoang chuan',
            'email' => 'hoanggiangchuan@gmail.com',
            'password' => '123',
            'address' => 'daklak',
            'phone_number' => '113'
            
        ]);
        DB::table('customer')->insert([
            'name' => 'duc chinh',
            'email' => 'duchinh@gmail.com',
            'password' => '123456',
            'address' => 'nghe an',
            'phone_number' => '118'
            
        ]);
        DB::table('customer')->insert([
            'name' => 'xuan huy',
            'email' => 'xuanhuy@gmail.com',
            'password' => '1234567',
            'address' => 'hcm',
            'phone_number' => '111'
            
        ]);
    }
}
