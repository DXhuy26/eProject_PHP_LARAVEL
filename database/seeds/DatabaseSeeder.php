<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
       $this->call(typeproductTableSeeder::class);
        $this->call(productTableSeeder::class);
       $this->call(customerTableSeeder::class);
        $this->call(adminTableSeeder::class);
    }
}
