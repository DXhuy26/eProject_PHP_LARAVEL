<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'admin_email' => 'hoanggiangchuan@gmail.com',
            'admin_password' => '0121765a',
            'admin_name' => 'Hoang Giang Chuan',
            'admin_phone' => '0703318572',
        ]);
        DB::table('admin')->insert([
            'admin_email' => 'xuanhuy@gmail.com',
            'admin_password' => '123456',
            'admin_name' => 'Dao Nguyen Xuan Huy',
            'admin_phone' => '114',
        ]);
        DB::table('admin')->insert([
            'admin_email' => 'ducchinh@gmail.com',
            'admin_password' => '123456789',
            'admin_name' => 'Vo Duc Chinh',
            'admin_phone' => '113',
        ]);
    }
}
