<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            'Name'        => 'Laptop1',
            'Description' => str_random('key', 50),
            'price'       => '1499',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop2',
            'Description' => str_random('key', 50),
            'price'       => '1000',
            'category'    => '2',
        ]);

    }
}
